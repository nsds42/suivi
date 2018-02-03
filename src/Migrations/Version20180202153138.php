<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180202153138 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE anomalie (id INT AUTO_INCREMENT NOT NULL, date_creation DATETIME NOT NULL, num_shp INT NOT NULL, num_oceane INT DEFAULT NULL, description VARCHAR(256) DEFAULT NULL, version_ano VARCHAR(100) DEFAULT NULL, garantie_vsr VARCHAR(20) DEFAULT NULL, val_reformulation TINYINT(1) DEFAULT \'0\', date_reformulation DATETIME DEFAULT NULL, developpeur VARCHAR(3) DEFAULT NULL, version_correctif VARCHAR(100) DEFAULT NULL, date_qual_moa DATETIME DEFAULT NULL, date_resolution DATETIME DEFAULT NULL, commentaire VARCHAR(256) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE anomalie');
    }
}
