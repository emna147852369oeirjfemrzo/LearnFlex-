<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260221204829 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

  public function up(Schema $schema): void
{
    // Ajouter en nullable d'abord
    $this->addSql('ALTER TABLE examen ADD created_at DATETIME DEFAULT NULL');
    $this->addSql('ALTER TABLE examen ADD updated_at DATETIME DEFAULT NULL');
    
    // Remplir les valeurs existantes
    $this->addSql("UPDATE examen SET created_at = NOW() WHERE created_at IS NULL");
    $this->addSql("UPDATE examen SET updated_at = NOW() WHERE updated_at IS NULL");
    
    // Passer en NOT NULL
    $this->addSql('ALTER TABLE examen MODIFY created_at DATETIME NOT NULL');
    $this->addSql('ALTER TABLE examen MODIFY updated_at DATETIME NOT NULL');
}

public function down(Schema $schema): void
{
    $this->addSql('ALTER TABLE examen DROP created_at, DROP updated_at');
}
}
