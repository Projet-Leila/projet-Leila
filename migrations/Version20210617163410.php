<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210617163410 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tg_reponse ADD reponse_id INT NOT NULL');
        $this->addSql('ALTER TABLE tg_reponse ADD CONSTRAINT FK_6AF6412ACF18BB82 FOREIGN KEY (reponse_id) REFERENCES tg_recrute (id)');
        $this->addSql('CREATE INDEX IDX_6AF6412ACF18BB82 ON tg_reponse (reponse_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tg_reponse DROP FOREIGN KEY FK_6AF6412ACF18BB82');
        $this->addSql('DROP INDEX IDX_6AF6412ACF18BB82 ON tg_reponse');
        $this->addSql('ALTER TABLE tg_reponse DROP reponse_id');
    }
}
