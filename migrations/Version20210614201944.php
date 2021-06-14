<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210614201944 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'make bottle relation';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bottle_tasting (bottle_id INT NOT NULL, tasting_id INT NOT NULL, INDEX IDX_431BA0C3DCF9352B (bottle_id), INDEX IDX_431BA0C35BC0FE1E (tasting_id), PRIMARY KEY(bottle_id, tasting_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bottle_packing (bottle_id INT NOT NULL, packing_id INT NOT NULL, INDEX IDX_DFCE549BDCF9352B (bottle_id), INDEX IDX_DFCE549BBF068368 (packing_id), PRIMARY KEY(bottle_id, packing_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bottle_tasting ADD CONSTRAINT FK_431BA0C3DCF9352B FOREIGN KEY (bottle_id) REFERENCES bottle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bottle_tasting ADD CONSTRAINT FK_431BA0C35BC0FE1E FOREIGN KEY (tasting_id) REFERENCES tasting (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bottle_packing ADD CONSTRAINT FK_DFCE549BDCF9352B FOREIGN KEY (bottle_id) REFERENCES bottle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bottle_packing ADD CONSTRAINT FK_DFCE549BBF068368 FOREIGN KEY (packing_id) REFERENCES packing (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bottle ADD grower_id INT NOT NULL, ADD type_id INT NOT NULL');
        $this->addSql('ALTER TABLE bottle ADD CONSTRAINT FK_ACA9A9555243E353 FOREIGN KEY (grower_id) REFERENCES grower (id)');
        $this->addSql('ALTER TABLE bottle ADD CONSTRAINT FK_ACA9A955C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_ACA9A9555243E353 ON bottle (grower_id)');
        $this->addSql('CREATE INDEX IDX_ACA9A955C54C8C93 ON bottle (type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bottle_tasting');
        $this->addSql('DROP TABLE bottle_packing');
        $this->addSql('ALTER TABLE bottle DROP FOREIGN KEY FK_ACA9A9555243E353');
        $this->addSql('ALTER TABLE bottle DROP FOREIGN KEY FK_ACA9A955C54C8C93');
        $this->addSql('DROP INDEX IDX_ACA9A9555243E353 ON bottle');
        $this->addSql('DROP INDEX IDX_ACA9A955C54C8C93 ON bottle');
        $this->addSql('ALTER TABLE bottle DROP grower_id, DROP type_id');
    }
}
