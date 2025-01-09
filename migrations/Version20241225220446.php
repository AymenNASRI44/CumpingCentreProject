<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241225220446 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649CD77014');
        $this->addSql('DROP INDEX IDX_8D93D649CD77014 ON user');
        $this->addSql('ALTER TABLE user CHANGE nom_region_id id_region_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6491813BD72 FOREIGN KEY (id_region_id) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6491813BD72 ON user (id_region_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6491813BD72');
        $this->addSql('DROP INDEX IDX_8D93D6491813BD72 ON user');
        $this->addSql('ALTER TABLE user CHANGE id_region_id nom_region_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649CD77014 FOREIGN KEY (nom_region_id) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649CD77014 ON user (nom_region_id)');
    }
}
