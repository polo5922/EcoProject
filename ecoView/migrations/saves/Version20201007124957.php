<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201007124957 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'add relation between association and user for the president';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE association ADD ass_president_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE association ADD CONSTRAINT FK_FD8521CC1B9866E4 FOREIGN KEY (ass_president_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_FD8521CC1B9866E4 ON association (ass_president_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE association DROP FOREIGN KEY FK_FD8521CC1B9866E4');
        $this->addSql('DROP INDEX IDX_FD8521CC1B9866E4 ON association');
        $this->addSql('ALTER TABLE association DROP ass_president_id');
    }
}
