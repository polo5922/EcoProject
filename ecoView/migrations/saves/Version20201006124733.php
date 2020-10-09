<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006124733 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'add association table';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE association (id INT AUTO_INCREMENT NOT NULL, ass_name VARCHAR(255) NOT NULL, ass_code VARCHAR(255) NOT NULL, ass_site VARCHAR(255) DEFAULT NULL, ass_adresse VARCHAR(255) DEFAULT NULL, ass_cp VARCHAR(255) DEFAULT NULL, ass_ville VARCHAR(255) DEFAULT NULL, ass_description LONGTEXT NOT NULL, ass_created_at DATE DEFAULT NULL, ass_added_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE association');
    }
}
