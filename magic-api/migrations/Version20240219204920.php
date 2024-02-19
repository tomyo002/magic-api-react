<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219204920 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE capacity (id INT AUTO_INCREMENT NOT NULL, card_id INT DEFAULT NULL, description VARCHAR(1000) NOT NULL, INDEX IDX_B5E8B1744ACC9A20 (card_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE card (id INT AUTO_INCREMENT NOT NULL, type_id INT DEFAULT NULL, extension_id INT DEFAULT NULL, name VARCHAR(100) NOT NULL, subtype VARCHAR(20) DEFAULT NULL, health_point INT DEFAULT NULL, attack_point INT DEFAULT NULL, loyalty INT DEFAULT NULL, rarity VARCHAR(10) NOT NULL, INDEX IDX_161498D3C54C8C93 (type_id), INDEX IDX_161498D3812D5EB (extension_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cost (id INT AUTO_INCREMENT NOT NULL, card_id INT DEFAULT NULL, element_id INT DEFAULT NULL, number INT NOT NULL, INDEX IDX_182694FC4ACC9A20 (card_id), INDEX IDX_182694FC1F1F2A24 (element_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE element (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(10) NOT NULL, icon LONGBLOB NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE extension (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, release_year VARCHAR(9) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE keyword (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(20) NOT NULL, description VARCHAR(1000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE keyword_card (id INT AUTO_INCREMENT NOT NULL, card_id INT DEFAULT NULL, keyword_id INT DEFAULT NULL, INDEX IDX_F14215D14ACC9A20 (card_id), INDEX IDX_F14215D1115D4552 (keyword_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE capacity ADD CONSTRAINT FK_B5E8B1744ACC9A20 FOREIGN KEY (card_id) REFERENCES card (id)');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D3C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D3812D5EB FOREIGN KEY (extension_id) REFERENCES extension (id)');
        $this->addSql('ALTER TABLE cost ADD CONSTRAINT FK_182694FC4ACC9A20 FOREIGN KEY (card_id) REFERENCES card (id)');
        $this->addSql('ALTER TABLE cost ADD CONSTRAINT FK_182694FC1F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id)');
        $this->addSql('ALTER TABLE keyword_card ADD CONSTRAINT FK_F14215D14ACC9A20 FOREIGN KEY (card_id) REFERENCES card (id)');
        $this->addSql('ALTER TABLE keyword_card ADD CONSTRAINT FK_F14215D1115D4552 FOREIGN KEY (keyword_id) REFERENCES keyword (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE capacity DROP FOREIGN KEY FK_B5E8B1744ACC9A20');
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D3C54C8C93');
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D3812D5EB');
        $this->addSql('ALTER TABLE cost DROP FOREIGN KEY FK_182694FC4ACC9A20');
        $this->addSql('ALTER TABLE cost DROP FOREIGN KEY FK_182694FC1F1F2A24');
        $this->addSql('ALTER TABLE keyword_card DROP FOREIGN KEY FK_F14215D14ACC9A20');
        $this->addSql('ALTER TABLE keyword_card DROP FOREIGN KEY FK_F14215D1115D4552');
        $this->addSql('DROP TABLE capacity');
        $this->addSql('DROP TABLE card');
        $this->addSql('DROP TABLE cost');
        $this->addSql('DROP TABLE element');
        $this->addSql('DROP TABLE extension');
        $this->addSql('DROP TABLE keyword');
        $this->addSql('DROP TABLE keyword_card');
        $this->addSql('DROP TABLE type');
    }
}
