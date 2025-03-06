<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250306004304 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, id_lieu_id INT NOT NULL, date DATE NOT NULL, commentaire LONGTEXT NOT NULL, INDEX IDX_8F91ABF0A76ED395 (user_id), INDEX IDX_8F91ABF0B42FBABC (id_lieu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE favorit (id INT AUTO_INCREMENT NOT NULL, date_fav DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE favorit_user (favorit_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_23117C96CC3FBFA2 (favorit_id), INDEX IDX_23117C96A76ED395 (user_id), PRIMARY KEY(favorit_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE favorit_lieucamping (favorit_id INT NOT NULL, lieucamping_id INT NOT NULL, INDEX IDX_71A4D6CCCC3FBFA2 (favorit_id), INDEX IDX_71A4D6CC2137592F (lieucamping_id), PRIMARY KEY(favorit_id, lieucamping_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lieucamping (id INT AUTO_INCREMENT NOT NULL, region_id_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, coordonner LONGTEXT NOT NULL, photo VARCHAR(255) NOT NULL, capacite INT NOT NULL, places_restantes INT DEFAULT NULL, INDEX IDX_F23A1A2CC7209D4F (region_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE region (id INT AUTO_INCREMENT NOT NULL, nom_region VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, lieu_camping_id INT DEFAULT NULL, user_id INT DEFAULT NULL, date_d DATE NOT NULL, date_f DATE NOT NULL, nombre_personnes INT NOT NULL, INDEX IDX_42C8495556A62231 (lieu_camping_id), INDEX IDX_42C84955A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, id_region_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D6491813BD72 (id_region_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0B42FBABC FOREIGN KEY (id_lieu_id) REFERENCES lieucamping (id)');
        $this->addSql('ALTER TABLE favorit_user ADD CONSTRAINT FK_23117C96CC3FBFA2 FOREIGN KEY (favorit_id) REFERENCES favorit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE favorit_user ADD CONSTRAINT FK_23117C96A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE favorit_lieucamping ADD CONSTRAINT FK_71A4D6CCCC3FBFA2 FOREIGN KEY (favorit_id) REFERENCES favorit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE favorit_lieucamping ADD CONSTRAINT FK_71A4D6CC2137592F FOREIGN KEY (lieucamping_id) REFERENCES lieucamping (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE lieucamping ADD CONSTRAINT FK_F23A1A2CC7209D4F FOREIGN KEY (region_id_id) REFERENCES region (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495556A62231 FOREIGN KEY (lieu_camping_id) REFERENCES lieucamping (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6491813BD72 FOREIGN KEY (id_region_id) REFERENCES region (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0A76ED395');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0B42FBABC');
        $this->addSql('ALTER TABLE favorit_user DROP FOREIGN KEY FK_23117C96CC3FBFA2');
        $this->addSql('ALTER TABLE favorit_user DROP FOREIGN KEY FK_23117C96A76ED395');
        $this->addSql('ALTER TABLE favorit_lieucamping DROP FOREIGN KEY FK_71A4D6CCCC3FBFA2');
        $this->addSql('ALTER TABLE favorit_lieucamping DROP FOREIGN KEY FK_71A4D6CC2137592F');
        $this->addSql('ALTER TABLE lieucamping DROP FOREIGN KEY FK_F23A1A2CC7209D4F');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495556A62231');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6491813BD72');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE favorit');
        $this->addSql('DROP TABLE favorit_user');
        $this->addSql('DROP TABLE favorit_lieucamping');
        $this->addSql('DROP TABLE lieucamping');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
