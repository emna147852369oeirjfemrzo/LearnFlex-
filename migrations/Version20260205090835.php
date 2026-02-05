<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260205090835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE challenge (id INT AUTO_INCREMENT NOT NULL, titrec VARCHAR(50) NOT NULL, descriptionc VARCHAR(255) NOT NULL, objectifscore DOUBLE PRECISION NOT NULL, progressionactuelle DOUBLE PRECISION NOT NULL, niveaudifficulte VARCHAR(50) NOT NULL, niveauatteint VARCHAR(50) NOT NULL, typerecomponse VARCHAR(100) NOT NULL, contenurecompense VARCHAR(255) NOT NULL, etat VARCHAR(50) NOT NULL, dated DATE NOT NULL, datef DATE NOT NULL, datelimite DATE NOT NULL, datecreationn DATE NOT NULL, alerte TINYINT NOT NULL, examen_id INT NOT NULL, INDEX IDX_D70989515C8659A (examen_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, contenu VARCHAR(255) NOT NULL, datecre DATE NOT NULL, auteur VARCHAR(50) NOT NULL, nbvue INT NOT NULL, likes INT NOT NULL, examen_id INT NOT NULL, INDEX IDX_67F068BC5C8659A (examen_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE examen (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, matiere VARCHAR(50) NOT NULL, niveauexamen VARCHAR(50) NOT NULL, datedebut DATE NOT NULL, datefin DATE NOT NULL, duree INT NOT NULL, nbquestion INT NOT NULL, scoretotal DOUBLE PRECISION NOT NULL, coefficient DOUBLE PRECISION NOT NULL, typeexamen VARCHAR(50) NOT NULL, etat VARCHAR(50) NOT NULL, datecreation DATE NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE challenge ADD CONSTRAINT FK_D70989515C8659A FOREIGN KEY (examen_id) REFERENCES examen (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC5C8659A FOREIGN KEY (examen_id) REFERENCES examen (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE challenge DROP FOREIGN KEY FK_D70989515C8659A');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC5C8659A');
        $this->addSql('DROP TABLE challenge');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE examen');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
