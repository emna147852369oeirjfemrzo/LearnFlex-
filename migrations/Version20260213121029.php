<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260213121029 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reponse_examen (id INT AUTO_INCREMENT NOT NULL, question VARCHAR(255) NOT NULL, reponse LONGTEXT NOT NULL, date_soumission DATETIME NOT NULL, examen_id INT NOT NULL, etudiant_id INT DEFAULT NULL, INDEX IDX_851856755C8659A (examen_id), INDEX IDX_85185675DDEAB1A3 (etudiant_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE reponse_examen ADD CONSTRAINT FK_851856755C8659A FOREIGN KEY (examen_id) REFERENCES examen (id)');
        $this->addSql('ALTER TABLE reponse_examen ADD CONSTRAINT FK_85185675DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponse_examen DROP FOREIGN KEY FK_851856755C8659A');
        $this->addSql('ALTER TABLE reponse_examen DROP FOREIGN KEY FK_85185675DDEAB1A3');
        $this->addSql('DROP TABLE reponse_examen');
    }
}
