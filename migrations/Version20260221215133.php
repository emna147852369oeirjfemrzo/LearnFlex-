<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260221215133 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cheat_log (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, count INT NOT NULL, created_at DATETIME NOT NULL, examen_id INT NOT NULL, etudiant_id INT DEFAULT NULL, INDEX IDX_758D45505C8659A (examen_id), INDEX IDX_758D4550DDEAB1A3 (etudiant_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE cheat_log ADD CONSTRAINT FK_758D45505C8659A FOREIGN KEY (examen_id) REFERENCES examen (id)');
        $this->addSql('ALTER TABLE cheat_log ADD CONSTRAINT FK_758D4550DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheat_log DROP FOREIGN KEY FK_758D45505C8659A');
        $this->addSql('ALTER TABLE cheat_log DROP FOREIGN KEY FK_758D4550DDEAB1A3');
        $this->addSql('DROP TABLE cheat_log');
    }
}
