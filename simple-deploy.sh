git pull
app/console cache:clear -e=prod
app/console doctrine:migrations:migrate
app/console assets:install
chmod 777 -R app/cache
chmod 777 -R app/logs
