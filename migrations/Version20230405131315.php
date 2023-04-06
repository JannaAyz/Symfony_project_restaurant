<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230405131315 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE recrutement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, curriculum_vitae VARCHAR(255) NOT NULL, lettre_motiv VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE reservation (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, date DATETIME NOT NULL, reservation_name VARCHAR(255) NOT NULL, restaurant_name VARCHAR(255) NOT NULL, number INTEGER NOT NULL, email VARCHAR(255) NOT NULL, heure TIME NOT NULL)');
        $this->addSql('DROP TABLE asupprimer');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE asupprimer (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL)');
        $this->addSql('DROP TABLE recrutement');
        $this->addSql('DROP TABLE reservation');
    }
}
