<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210616172244 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tg_recrute (id INT NOT NULL, users_id INT DEFAULT NULL, publications_id INT DEFAULT NULL, lb_titre VARCHAR(100) DEFAULT NULL, lb_description LONGTEXT NOT NULL, date_publication DATETIME NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, INDEX IDX_B0F7F96C67B3B43D (users_id), INDEX IDX_B0F7F96CAFFB3979 (publications_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tr_publication (id INT NOT NULL, lb_publication VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, lastname VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, tel VARCHAR(255) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tg_recrute ADD CONSTRAINT FK_B0F7F96CAFFB3979 FOREIGN KEY (publications_id) REFERENCES tr_publication (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tg_recrute DROP FOREIGN KEY FK_B0F7F96CAFFB3979');
        $this->addSql('ALTER TABLE tg_recrute DROP FOREIGN KEY FK_B0F7F96C67B3B43D');
        $this->addSql('DROP TABLE tg_recrute');
        $this->addSql('DROP TABLE tr_publication');
        $this->addSql('DROP TABLE user');
    }
}
