<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230324114415 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD heure TIME NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE firstname firstname VARCHAR(100) NOT NULL, CHANGE lastname lastname VARCHAR(100) NOT NULL, CHANGE phone phone VARCHAR(100) NOT NULL, CHANGE city city VARCHAR(100) NOT NULL, CHANGE address address VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP heure');
        $this->addSql('ALTER TABLE user CHANGE firstname firstname VARCHAR(255) NOT NULL, CHANGE lastname lastname VARCHAR(255) NOT NULL, CHANGE phone phone VARCHAR(255) NOT NULL, CHANGE city city VARCHAR(255) NOT NULL, CHANGE address address VARCHAR(255) NOT NULL');
    }
}
