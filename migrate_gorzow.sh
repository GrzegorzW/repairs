#!/usr/bin/env bash

parse_yaml() {
   local prefix=$2
   local s='[[:space:]]*' w='[a-zA-Z0-9_]*' fs=$(echo @|tr @ '\034')
   sed -ne "s|^\($s\)\($w\)$s:$s\"\(.*\)\"$s\$|\1$fs\2$fs\3|p" \
        -e "s|^\($s\)\($w\)$s:$s\(.*\)$s\$|\1$fs\2$fs\3|p"  $1 |
   awk -F$fs '{
      indent = length($1)/2;
      vname[indent] = $2;
      for (i in vname) {if (i > indent) {delete vname[i]}}
      if (length($3) > 0) {
         vn=""; for (i=0; i<indent; i++) {vn=(vn)(vname[i])("_")}
         printf("%s%s%s=\"%s\"\n", "'$prefix'",vn, $2, $3);
      }
   }'
}

date=$(date +"%d-%b-%Y-%H:%m:%s")
backup_path="backup"
backup_date_path=$backup_path/$date

read -r -p "Czy chcesz zrobic backup? [y/N] " response
case "$response" in y|Y|t|T|[yY][eE][sS]|[tT][aA][kK] )
    mkdir -p $backup_date_path;
    eval $(parse_yaml app/config/parameters.yml "")
    mysqldump --user=$parameters__database_user --password=$parameters__database_password --host=$parameters__database_host $parameters__database_name > $backup_date_path/$parameters__database_name.sql
esac

git pull

read -r -p "Czy chcesz zrobic composer update? [y/N] " response
case "$response" in y|Y|t|T|[yY][eE][sS]|[tT][aA][kK] )
  mkdir -p $backup_date_path;
  cp composer.lock $backup_date_path/composer.lock
  composer update;
esac
php bin/console cache:clear -e=prod
yes | php bin/console doctrine:migrations:migrate
php app/console assets:install -e=prod
php app/console assetic:dump -e=prod
chmod 777 -R var/cache
chmod 777 -R var/logs

#echo "Enter database user"
#read dbuser
#echo "Enter database password"
#read dbpassword
#echo "Enter database name: "
#read dbname
#echo "Chose dump localization: \n 1 dla Mac Mini \n 2 dla HP 8530w"
#read dumpLocalization
#
#if [ $dumpLocalization = 1 ]
#then
#	dumpPath="pokwitowanie_2016-03-21.sql"
#else
#	dumpPath="/home/user/dumps/gorzow_pokwitowanie.sql"
#fi

mysql -u$parameters__database_user -p$parameters__database_password << EOF
DROP SCHEMA IF EXISTS $parameters__database_name;
CREATE DATABASE $parameters__database_name CHARACTER SET utf8 COLLATE utf8_general_ci;
exit
EOF

php app/console doctrine:migrations:migrate 20160224144102 --no-interaction

mysql -u$parameters__database_user -p$parameters__database_password << EOF
USE $parameters__database_name;
SOURCE $backup_date_path/$parameters__database_name.sql;
exit
EOF

php app/console doctrine:migrations:migrate --no-interaction