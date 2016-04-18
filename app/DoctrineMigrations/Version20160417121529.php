<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160417121529 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ext_translations (id INT AUTO_INCREMENT NOT NULL, locale VARCHAR(8) NOT NULL, object_class VARCHAR(255) NOT NULL, field VARCHAR(32) NOT NULL, foreign_key VARCHAR(64) NOT NULL, content LONGTEXT DEFAULT NULL, INDEX translations_lookup_idx (locale, object_class, foreign_key), UNIQUE INDEX lookup_unique_idx (locale, object_class, field, foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ext_log_entries (id INT AUTO_INCREMENT NOT NULL, action VARCHAR(8) NOT NULL, logged_at DATETIME NOT NULL, object_id VARCHAR(64) DEFAULT NULL, object_class VARCHAR(255) NOT NULL, version INT NOT NULL, data LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', username VARCHAR(255) DEFAULT NULL, INDEX log_class_lookup_idx (object_class), INDEX log_date_lookup_idx (logged_at), INDEX log_user_lookup_idx (username), INDEX log_version_lookup_idx (object_id, object_class, version), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE worker_order_status (id INT AUTO_INCREMENT NOT NULL, name LONGTEXT NOT NULL, sequence INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repairers_history (id INT AUTO_INCREMENT NOT NULL, repair INT DEFAULT NULL, user INT DEFAULT NULL, author INT DEFAULT NULL, created DATETIME NOT NULL, stop DATETIME DEFAULT NULL, INDEX IDX_40275A268EE43421 (repair), INDEX IDX_40275A268D93D649 (user), INDEX IDX_40275A26BDAFD8C8 (author), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE total_repair_pricing_statuses (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, sequence INT NOT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_51311C3A8CDE5729 (type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE regulations (id INT AUTO_INCREMENT NOT NULL, paragraph LONGTEXT NOT NULL, company_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localization (id INT AUTO_INCREMENT NOT NULL, company INT DEFAULT NULL, name VARCHAR(255) NOT NULL, street VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, post_code VARCHAR(255) NOT NULL, tel_1 VARCHAR(35) NOT NULL COMMENT \'(DC2Type:phone_number)\', tel_2 VARCHAR(35) DEFAULT NULL COMMENT \'(DC2Type:phone_number)\', tel_3 VARCHAR(35) DEFAULT NULL COMMENT \'(DC2Type:phone_number)\', email_first VARCHAR(255) NOT NULL, email_second VARCHAR(255) DEFAULT NULL, mon_fri_open VARCHAR(255) NOT NULL, sat_open VARCHAR(255) DEFAULT NULL, INDEX IDX_98DC9F474FBF094F (company), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment_methods (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, sequence INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repair_cost_kind (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, type SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE devices (id INT AUTO_INCREMENT NOT NULL, device_type INT NOT NULL, user INT DEFAULT NULL, alt_id INT NOT NULL, brand VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, serial VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_11074E9A5E78213 (device_type), INDEX IDX_11074E9A8D93D649 (user), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE status (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, sequence INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE custom_fields (id INT AUTO_INCREMENT NOT NULL, custom_field_template INT NOT NULL, device INT NOT NULL, value LONGTEXT DEFAULT NULL, INDEX IDX_4A48378C6BBDAD94 (custom_field_template), INDEX IDX_4A48378C92FB68E (device), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE total_repair_pricings (id INT AUTO_INCREMENT NOT NULL, repair INT NOT NULL, user INT NOT NULL, respondent INT DEFAULT NULL, method INT DEFAULT NULL, status INT NOT NULL, totalPriceAmount INT NOT NULL, totalPriceCurrency VARCHAR(64) NOT NULL, descriptions LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', responded_at DATETIME DEFAULT NULL, created DATETIME NOT NULL, INDEX IDX_BAA5C508EE43421 (repair), INDEX IDX_BAA5C508D93D649 (user), INDEX IDX_BAA5C50409B5150 (respondent), INDEX IDX_BAA5C505E593A60 (method), INDEX IDX_BAA5C507B00651C (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE device_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_visible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE devices_types_custom_fields_templates (device_type_id INT NOT NULL, custom_field_template_id INT NOT NULL, INDEX IDX_42B7FA244FFA550E (device_type_id), INDEX IDX_42B7FA243222D8E2 (custom_field_template_id), PRIMARY KEY(device_type_id, custom_field_template_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE total_repair_pricing_response_methods (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, sequence INT NOT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_3E3F9C0C8CDE5729 (type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repair_status (id INT AUTO_INCREMENT NOT NULL, repair_id INT DEFAULT NULL, author INT DEFAULT NULL, status_id INT DEFAULT NULL, created DATETIME NOT NULL, INDEX IDX_A4C0551B43833CFF (repair_id), INDEX IDX_A4C0551BBDAFD8C8 (author), INDEX IDX_A4C0551B6BF700BD (status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE custom_field_template_values (id INT AUTO_INCREMENT NOT NULL, custom_field_template INT DEFAULT NULL, name VARCHAR(255) NOT NULL, is_visible TINYINT(1) NOT NULL, INDEX IDX_79E147DD6BBDAD94 (custom_field_template), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE custom_field_templates (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_visible TINYINT(1) NOT NULL, is_required TINYINT(1) NOT NULL, type SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE worker_order (id INT AUTO_INCREMENT NOT NULL, author INT DEFAULT NULL, status INT DEFAULT NULL, description LONGTEXT NOT NULL, href LONGTEXT DEFAULT NULL, created DATETIME NOT NULL, visible TINYINT(1) NOT NULL, INDEX IDX_E98E374CBDAFD8C8 (author), INDEX IDX_E98E374C7B00651C (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pokwitowanie_history (id INT AUTO_INCREMENT NOT NULL, repair_id INT NOT NULL, repair_alt_id VARCHAR(8) NOT NULL, repair_addition VARCHAR(255) DEFAULT NULL, repair_description LONGTEXT NOT NULL, repair_start_date DATE NOT NULL, device_brand VARCHAR(255) NOT NULL, device_model VARCHAR(255) NOT NULL, device_serial VARCHAR(255) NOT NULL, custom_fields LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', client_id INT NOT NULL, client_alt_id VARCHAR(8) NOT NULL, client_name VARCHAR(255) NOT NULL, client_surname VARCHAR(255) NOT NULL, client_username VARCHAR(255) NOT NULL, client_email VARCHAR(255) DEFAULT NULL, client_tel VARCHAR(35) NOT NULL COMMENT \'(DC2Type:phone_number)\', client_temp_pw VARCHAR(255) NOT NULL, client_temp_pw_changed TINYINT(1) NOT NULL, client_company_name VARCHAR(255) DEFAULT NULL, client_company_nip VARCHAR(255) DEFAULT NULL, client_company_address VARCHAR(255) DEFAULT NULL, client_company_post_code VARCHAR(255) DEFAULT NULL, client_company_city VARCHAR(255) DEFAULT NULL, company_id INT NOT NULL, company_name VARCHAR(255) NOT NULL, company_street VARCHAR(255) NOT NULL, company_city VARCHAR(255) NOT NULL, company_post_code VARCHAR(255) NOT NULL, company_nip VARCHAR(255) NOT NULL, company_main_site VARCHAR(255) NOT NULL, company_pokwitowanie_site VARCHAR(255) NOT NULL, localization_id INT NOT NULL, localization_name VARCHAR(255) NOT NULL, localization_street VARCHAR(255) NOT NULL, localization_city VARCHAR(255) NOT NULL, localization_post_code VARCHAR(255) NOT NULL, localization_tel_1 VARCHAR(35) NOT NULL COMMENT \'(DC2Type:phone_number)\', localization_tel_2 VARCHAR(35) DEFAULT NULL COMMENT \'(DC2Type:phone_number)\', localization_tel_3 VARCHAR(35) DEFAULT NULL COMMENT \'(DC2Type:phone_number)\', localization_email_first VARCHAR(255) NOT NULL, localization_email_second VARCHAR(255) DEFAULT NULL, regulations LONGTEXT NOT NULL, repairer_id INT NOT NULL, repairer_alt_id VARCHAR(8) NOT NULL, repairer_name VARCHAR(255) NOT NULL, repairer_surname VARCHAR(255) NOT NULL, repairer_username VARCHAR(255) NOT NULL, repairer_email VARCHAR(255) NOT NULL, repairer_tel VARCHAR(35) NOT NULL COMMENT \'(DC2Type:phone_number)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messages (id INT AUTO_INCREMENT NOT NULL, sender INT DEFAULT NULL, repair INT DEFAULT NULL, content LONGTEXT NOT NULL, was_read TINYINT(1) NOT NULL, created DATETIME NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_DB021E965F004ACF (sender), INDEX IDX_DB021E968EE43421 (repair), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repair_cost (id INT AUTO_INCREMENT NOT NULL, repair INT DEFAULT NULL, author INT DEFAULT NULL, cost_kind INT DEFAULT NULL, localization INT DEFAULT NULL, description VARCHAR(40) NOT NULL, priceAmount INT NOT NULL, priceCurrency VARCHAR(64) NOT NULL, created DATETIME NOT NULL, updated DATETIME NOT NULL, INDEX IDX_CD00401C8EE43421 (repair), INDEX IDX_CD00401CBDAFD8C8 (author), INDEX IDX_CD00401C67DCA566 (cost_kind), INDEX IDX_CD00401C98DC9F47 (localization), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, street VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, post_code VARCHAR(255) NOT NULL, nip VARCHAR(255) NOT NULL, main_site VARCHAR(255) NOT NULL, email_subject_begin VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL, logo_name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, localization INT NOT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, alt_id INT NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, tel VARCHAR(35) NOT NULL COMMENT \'(DC2Type:phone_number)\', temp_pw VARCHAR(255) NOT NULL, temp_pw_changed TINYINT(1) NOT NULL, marketing_agreement TINYINT(1) NOT NULL, first_login_modal_rendered TINYINT(1) NOT NULL, client_company_name VARCHAR(255) DEFAULT NULL, client_company_nip VARCHAR(255) DEFAULT NULL, client_company_address VARCHAR(255) DEFAULT NULL, client_company_post_code VARCHAR(255) DEFAULT NULL, client_company_city VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, email_canonical VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D64992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_8D93D649A0D96FBF (email_canonical), INDEX IDX_8D93D64998DC9F47 (localization), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repair (id INT AUTO_INCREMENT NOT NULL, user INT NOT NULL, current_status INT DEFAULT NULL, current_repairer INT DEFAULT NULL, start_localization INT DEFAULT NULL, payment_method INT NOT NULL, device INT NOT NULL, alt_id INT NOT NULL, start_date DATETIME NOT NULL, opinion LONGTEXT DEFAULT NULL, end_date DATETIME DEFAULT NULL, opinion_date DATETIME DEFAULT NULL, add_opinion_flag TINYINT(1) NOT NULL, approved TINYINT(1) NOT NULL, description LONGTEXT NOT NULL, addition LONGTEXT DEFAULT NULL, total_repair_pricing_changed TINYINT(1) NOT NULL, INDEX IDX_8EE434218D93D649 (user), INDEX IDX_8EE434217CC9BF72 (current_status), INDEX IDX_8EE43421D70B8895 (current_repairer), INDEX IDX_8EE43421548A9FC2 (start_localization), INDEX IDX_8EE434217B61A1F6 (payment_method), INDEX IDX_8EE4342192FB68E (device), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notifications (id INT AUTO_INCREMENT NOT NULL, user INT DEFAULT NULL, object_id VARCHAR(64) DEFAULT NULL, object_class VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, type VARCHAR(255) NOT NULL, is_read TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_6000B0D38D93D649 (user), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tbbc_money_doctrine_storage_ratios (id INT AUTO_INCREMENT NOT NULL, currency_code VARCHAR(3) NOT NULL, ratio DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_1168A609FDA273EC (currency_code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tbbc_money_ratio_history (id INT AUTO_INCREMENT NOT NULL, currency_code VARCHAR(3) NOT NULL, reference_currency_code VARCHAR(3) NOT NULL, ratio DOUBLE PRECISION NOT NULL, saved_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE repairers_history ADD CONSTRAINT FK_40275A268EE43421 FOREIGN KEY (repair) REFERENCES repair (id)');
        $this->addSql('ALTER TABLE repairers_history ADD CONSTRAINT FK_40275A268D93D649 FOREIGN KEY (user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE repairers_history ADD CONSTRAINT FK_40275A26BDAFD8C8 FOREIGN KEY (author) REFERENCES user (id)');
        $this->addSql('ALTER TABLE localization ADD CONSTRAINT FK_98DC9F474FBF094F FOREIGN KEY (company) REFERENCES company (id)');
        $this->addSql('ALTER TABLE devices ADD CONSTRAINT FK_11074E9A5E78213 FOREIGN KEY (device_type) REFERENCES device_types (id)');
        $this->addSql('ALTER TABLE devices ADD CONSTRAINT FK_11074E9A8D93D649 FOREIGN KEY (user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE custom_fields ADD CONSTRAINT FK_4A48378C6BBDAD94 FOREIGN KEY (custom_field_template) REFERENCES custom_field_templates (id)');
        $this->addSql('ALTER TABLE custom_fields ADD CONSTRAINT FK_4A48378C92FB68E FOREIGN KEY (device) REFERENCES devices (id)');
        $this->addSql('ALTER TABLE total_repair_pricings ADD CONSTRAINT FK_BAA5C508EE43421 FOREIGN KEY (repair) REFERENCES repair (id)');
        $this->addSql('ALTER TABLE total_repair_pricings ADD CONSTRAINT FK_BAA5C508D93D649 FOREIGN KEY (user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE total_repair_pricings ADD CONSTRAINT FK_BAA5C50409B5150 FOREIGN KEY (respondent) REFERENCES user (id)');
        $this->addSql('ALTER TABLE total_repair_pricings ADD CONSTRAINT FK_BAA5C505E593A60 FOREIGN KEY (method) REFERENCES total_repair_pricing_response_methods (id)');
        $this->addSql('ALTER TABLE total_repair_pricings ADD CONSTRAINT FK_BAA5C507B00651C FOREIGN KEY (status) REFERENCES total_repair_pricing_statuses (id)');
        $this->addSql('ALTER TABLE devices_types_custom_fields_templates ADD CONSTRAINT FK_42B7FA244FFA550E FOREIGN KEY (device_type_id) REFERENCES device_types (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE devices_types_custom_fields_templates ADD CONSTRAINT FK_42B7FA243222D8E2 FOREIGN KEY (custom_field_template_id) REFERENCES custom_field_templates (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repair_status ADD CONSTRAINT FK_A4C0551B43833CFF FOREIGN KEY (repair_id) REFERENCES repair (id)');
        $this->addSql('ALTER TABLE repair_status ADD CONSTRAINT FK_A4C0551BBDAFD8C8 FOREIGN KEY (author) REFERENCES user (id)');
        $this->addSql('ALTER TABLE repair_status ADD CONSTRAINT FK_A4C0551B6BF700BD FOREIGN KEY (status_id) REFERENCES status (id)');
        $this->addSql('ALTER TABLE custom_field_template_values ADD CONSTRAINT FK_79E147DD6BBDAD94 FOREIGN KEY (custom_field_template) REFERENCES custom_field_templates (id)');
        $this->addSql('ALTER TABLE worker_order ADD CONSTRAINT FK_E98E374CBDAFD8C8 FOREIGN KEY (author) REFERENCES user (id)');
        $this->addSql('ALTER TABLE worker_order ADD CONSTRAINT FK_E98E374C7B00651C FOREIGN KEY (status) REFERENCES worker_order_status (id)');
        $this->addSql('ALTER TABLE messages ADD CONSTRAINT FK_DB021E965F004ACF FOREIGN KEY (sender) REFERENCES user (id)');
        $this->addSql('ALTER TABLE messages ADD CONSTRAINT FK_DB021E968EE43421 FOREIGN KEY (repair) REFERENCES repair (id)');
        $this->addSql('ALTER TABLE repair_cost ADD CONSTRAINT FK_CD00401C8EE43421 FOREIGN KEY (repair) REFERENCES repair (id)');
        $this->addSql('ALTER TABLE repair_cost ADD CONSTRAINT FK_CD00401CBDAFD8C8 FOREIGN KEY (author) REFERENCES user (id)');
        $this->addSql('ALTER TABLE repair_cost ADD CONSTRAINT FK_CD00401C67DCA566 FOREIGN KEY (cost_kind) REFERENCES repair_cost_kind (id)');
        $this->addSql('ALTER TABLE repair_cost ADD CONSTRAINT FK_CD00401C98DC9F47 FOREIGN KEY (localization) REFERENCES localization (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64998DC9F47 FOREIGN KEY (localization) REFERENCES localization (id)');
        $this->addSql('ALTER TABLE repair ADD CONSTRAINT FK_8EE434218D93D649 FOREIGN KEY (user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE repair ADD CONSTRAINT FK_8EE434217CC9BF72 FOREIGN KEY (current_status) REFERENCES status (id)');
        $this->addSql('ALTER TABLE repair ADD CONSTRAINT FK_8EE43421D70B8895 FOREIGN KEY (current_repairer) REFERENCES user (id)');
        $this->addSql('ALTER TABLE repair ADD CONSTRAINT FK_8EE43421548A9FC2 FOREIGN KEY (start_localization) REFERENCES localization (id)');
        $this->addSql('ALTER TABLE repair ADD CONSTRAINT FK_8EE434217B61A1F6 FOREIGN KEY (payment_method) REFERENCES payment_methods (id)');
        $this->addSql('ALTER TABLE repair ADD CONSTRAINT FK_8EE4342192FB68E FOREIGN KEY (device) REFERENCES devices (id)');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT FK_6000B0D38D93D649 FOREIGN KEY (user) REFERENCES user (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE worker_order DROP FOREIGN KEY FK_E98E374C7B00651C');
        $this->addSql('ALTER TABLE total_repair_pricings DROP FOREIGN KEY FK_BAA5C507B00651C');
        $this->addSql('ALTER TABLE repair_cost DROP FOREIGN KEY FK_CD00401C98DC9F47');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64998DC9F47');
        $this->addSql('ALTER TABLE repair DROP FOREIGN KEY FK_8EE43421548A9FC2');
        $this->addSql('ALTER TABLE repair DROP FOREIGN KEY FK_8EE434217B61A1F6');
        $this->addSql('ALTER TABLE repair_cost DROP FOREIGN KEY FK_CD00401C67DCA566');
        $this->addSql('ALTER TABLE custom_fields DROP FOREIGN KEY FK_4A48378C92FB68E');
        $this->addSql('ALTER TABLE repair DROP FOREIGN KEY FK_8EE4342192FB68E');
        $this->addSql('ALTER TABLE repair_status DROP FOREIGN KEY FK_A4C0551B6BF700BD');
        $this->addSql('ALTER TABLE repair DROP FOREIGN KEY FK_8EE434217CC9BF72');
        $this->addSql('ALTER TABLE devices DROP FOREIGN KEY FK_11074E9A5E78213');
        $this->addSql('ALTER TABLE devices_types_custom_fields_templates DROP FOREIGN KEY FK_42B7FA244FFA550E');
        $this->addSql('ALTER TABLE total_repair_pricings DROP FOREIGN KEY FK_BAA5C505E593A60');
        $this->addSql('ALTER TABLE custom_fields DROP FOREIGN KEY FK_4A48378C6BBDAD94');
        $this->addSql('ALTER TABLE devices_types_custom_fields_templates DROP FOREIGN KEY FK_42B7FA243222D8E2');
        $this->addSql('ALTER TABLE custom_field_template_values DROP FOREIGN KEY FK_79E147DD6BBDAD94');
        $this->addSql('ALTER TABLE localization DROP FOREIGN KEY FK_98DC9F474FBF094F');
        $this->addSql('ALTER TABLE repairers_history DROP FOREIGN KEY FK_40275A268D93D649');
        $this->addSql('ALTER TABLE repairers_history DROP FOREIGN KEY FK_40275A26BDAFD8C8');
        $this->addSql('ALTER TABLE devices DROP FOREIGN KEY FK_11074E9A8D93D649');
        $this->addSql('ALTER TABLE total_repair_pricings DROP FOREIGN KEY FK_BAA5C508D93D649');
        $this->addSql('ALTER TABLE total_repair_pricings DROP FOREIGN KEY FK_BAA5C50409B5150');
        $this->addSql('ALTER TABLE repair_status DROP FOREIGN KEY FK_A4C0551BBDAFD8C8');
        $this->addSql('ALTER TABLE worker_order DROP FOREIGN KEY FK_E98E374CBDAFD8C8');
        $this->addSql('ALTER TABLE messages DROP FOREIGN KEY FK_DB021E965F004ACF');
        $this->addSql('ALTER TABLE repair_cost DROP FOREIGN KEY FK_CD00401CBDAFD8C8');
        $this->addSql('ALTER TABLE repair DROP FOREIGN KEY FK_8EE434218D93D649');
        $this->addSql('ALTER TABLE repair DROP FOREIGN KEY FK_8EE43421D70B8895');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY FK_6000B0D38D93D649');
        $this->addSql('ALTER TABLE repairers_history DROP FOREIGN KEY FK_40275A268EE43421');
        $this->addSql('ALTER TABLE total_repair_pricings DROP FOREIGN KEY FK_BAA5C508EE43421');
        $this->addSql('ALTER TABLE repair_status DROP FOREIGN KEY FK_A4C0551B43833CFF');
        $this->addSql('ALTER TABLE messages DROP FOREIGN KEY FK_DB021E968EE43421');
        $this->addSql('ALTER TABLE repair_cost DROP FOREIGN KEY FK_CD00401C8EE43421');
        $this->addSql('DROP TABLE ext_translations');
        $this->addSql('DROP TABLE ext_log_entries');
        $this->addSql('DROP TABLE worker_order_status');
        $this->addSql('DROP TABLE repairers_history');
        $this->addSql('DROP TABLE total_repair_pricing_statuses');
        $this->addSql('DROP TABLE regulations');
        $this->addSql('DROP TABLE localization');
        $this->addSql('DROP TABLE payment_methods');
        $this->addSql('DROP TABLE repair_cost_kind');
        $this->addSql('DROP TABLE devices');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP TABLE custom_fields');
        $this->addSql('DROP TABLE total_repair_pricings');
        $this->addSql('DROP TABLE device_types');
        $this->addSql('DROP TABLE devices_types_custom_fields_templates');
        $this->addSql('DROP TABLE total_repair_pricing_response_methods');
        $this->addSql('DROP TABLE repair_status');
        $this->addSql('DROP TABLE custom_field_template_values');
        $this->addSql('DROP TABLE custom_field_templates');
        $this->addSql('DROP TABLE worker_order');
        $this->addSql('DROP TABLE pokwitowanie_history');
        $this->addSql('DROP TABLE messages');
        $this->addSql('DROP TABLE repair_cost');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE repair');
        $this->addSql('DROP TABLE notifications');
        $this->addSql('DROP TABLE tbbc_money_doctrine_storage_ratios');
        $this->addSql('DROP TABLE tbbc_money_ratio_history');
    }
}
