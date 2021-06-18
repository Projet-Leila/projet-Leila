<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210617164710 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tg_reponse ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE tg_reponse ADD CONSTRAINT FK_6AF6412AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6AF6412AA76ED395 ON tg_reponse (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tg_reponse DROP FOREIGN KEY FK_6AF6412AA76ED395');
        $this->addSql('DROP INDEX IDX_6AF6412AA76ED395 ON tg_reponse');
        $this->addSql('ALTER TABLE tg_reponse DROP user_id');
    }
}
