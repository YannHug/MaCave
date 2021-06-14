<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210614200414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'make bottle table';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bottle (id INT AUTO_INCREMENT NOT NULL, vintage INT DEFAULT NULL, domain VARCHAR(255) DEFAULT NULL, grade INT DEFAULT NULL, appellation VARCHAR(255) DEFAULT NULL, grape_varieties VARCHAR(255) DEFAULT NULL, serving LONGTEXT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bottle');
    }
}
