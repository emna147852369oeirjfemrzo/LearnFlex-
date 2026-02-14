<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260209093732 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE communication (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, lien VARCHAR(500) DEFAULT NULL, date_heure DATETIME NOT NULL, duree INT DEFAULT NULL, etat VARCHAR(50) NOT NULL, description_detaillee LONGTEXT DEFAULT NULL, publication_id INT NOT NULL, INDEX IDX_F9AFB5EB38B217A7 (publication_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE publication (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, date_creation DATETIME NOT NULL, categorie VARCHAR(100) NOT NULL, nombre_vues INT NOT NULL, nombre_likes INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE communication ADD CONSTRAINT FK_F9AFB5EB38B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE communication DROP FOREIGN KEY FK_F9AFB5EB38B217A7');
        $this->addSql('DROP TABLE communication');
        $this->addSql('DROP TABLE publication');
    }
}
