<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201119145228 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, bloc_id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(255) DEFAULT NULL, INDEX IDX_B87555155582E9C0 (bloc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bac (id INT AUTO_INCREMENT NOT NULL, code INT DEFAULT NULL, libelle VARCHAR(60) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bloc (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, enseignant_id INT DEFAULT NULL, rp_id INT NOT NULL, commentaire LONGTEXT NOT NULL, date_commentaire DATE NOT NULL, INDEX IDX_67F068BCE455FCC0 (enseignant_id), INDEX IDX_67F068BCB70FF80C (rp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, activite_id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(255) DEFAULT NULL, INDEX IDX_94D4687F9B0F88B1 (activite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enseignant (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) DEFAULT NULL, prenom VARCHAR(50) DEFAULT NULL, mail VARCHAR(60) DEFAULT NULL, niveau VARCHAR(20) DEFAULT NULL, statut VARCHAR(60) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etudiant (id INT AUTO_INCREMENT NOT NULL, bac_id INT DEFAULT NULL, promotion_id INT DEFAULT NULL, option_i_id INT DEFAULT NULL, ville_perso_id INT DEFAULT NULL, ville_famille_id INT DEFAULT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, mail VARCHAR(80) DEFAULT NULL, mdp VARCHAR(20) NOT NULL, numexam VARCHAR(25) NOT NULL, mobile INT NOT NULL, photo VARCHAR(50) DEFAULT NULL, telperso INT DEFAULT NULL, telfamille INT NOT NULL, postbac VARCHAR(80) DEFAULT NULL, etabbac VARCHAR(100) NOT NULL, datenaiss DATE NOT NULL, sexe VARCHAR(2) NOT NULL, adrperso VARCHAR(80) NOT NULL, adrfamille VARCHAR(80) NOT NULL, statut VARCHAR(150) NOT NULL, INDEX IDX_717E22E3E03F15C0 (bac_id), INDEX IDX_717E22E3139DF194 (promotion_id), INDEX IDX_717E22E31664D154 (option_i_id), INDEX IDX_717E22E3D0C00A17 (ville_perso_id), INDEX IDX_717E22E349FB9F8D (ville_famille_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localisation (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `option` (id INT AUTO_INCREMENT NOT NULL, sigle VARCHAR(50) DEFAULT NULL, libelle VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE production (id INT AUTO_INCREMENT NOT NULL, rp_id INT NOT NULL, num INT NOT NULL, designation VARCHAR(255) DEFAULT NULL, adresse LONGTEXT DEFAULT NULL, INDEX IDX_D3EDB1E0B70FF80C (rp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) DEFAULT NULL, annee INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rp (id INT AUTO_INCREMENT NOT NULL, localisation_id INT DEFAULT NULL, statut_id INT DEFAULT NULL, source_id INT NOT NULL, etudiant_id INT NOT NULL, enseignant_id INT DEFAULT NULL, libcourt VARCHAR(100) NOT NULL, descriptif VARCHAR(255) DEFAULT NULL, contexte VARCHAR(255) DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, environnement VARCHAR(255) DEFAULT NULL, moyen VARCHAR(255) DEFAULT NULL, date_modif DATE DEFAULT NULL, INDEX IDX_CD578B7C68BE09C (localisation_id), INDEX IDX_CD578B7F6203804 (statut_id), INDEX IDX_CD578B7953C1C61 (source_id), INDEX IDX_CD578B7DDEAB1A3 (etudiant_id), INDEX IDX_CD578B7E455FCC0 (enseignant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rpactivite (id INT AUTO_INCREMENT NOT NULL, niveau_id INT DEFAULT NULL, activite_id INT NOT NULL, rp_id INT NOT NULL, commentaire LONGTEXT DEFAULT NULL, INDEX IDX_3CC2747AB3E9C81 (niveau_id), INDEX IDX_3CC2747A9B0F88B1 (activite_id), INDEX IDX_3CC2747AB70FF80C (rp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE source (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statut (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) DEFAULT NULL, copos VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B87555155582E9C0 FOREIGN KEY (bloc_id) REFERENCES bloc (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCE455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCB70FF80C FOREIGN KEY (rp_id) REFERENCES rp (id)');
        $this->addSql('ALTER TABLE competence ADD CONSTRAINT FK_94D4687F9B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3E03F15C0 FOREIGN KEY (bac_id) REFERENCES bac (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E31664D154 FOREIGN KEY (option_i_id) REFERENCES `option` (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3D0C00A17 FOREIGN KEY (ville_perso_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E349FB9F8D FOREIGN KEY (ville_famille_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE production ADD CONSTRAINT FK_D3EDB1E0B70FF80C FOREIGN KEY (rp_id) REFERENCES rp (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7C68BE09C FOREIGN KEY (localisation_id) REFERENCES localisation (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7F6203804 FOREIGN KEY (statut_id) REFERENCES statut (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7953C1C61 FOREIGN KEY (source_id) REFERENCES source (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE rpactivite ADD CONSTRAINT FK_3CC2747AB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
        $this->addSql('ALTER TABLE rpactivite ADD CONSTRAINT FK_3CC2747A9B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id)');
        $this->addSql('ALTER TABLE rpactivite ADD CONSTRAINT FK_3CC2747AB70FF80C FOREIGN KEY (rp_id) REFERENCES rp (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competence DROP FOREIGN KEY FK_94D4687F9B0F88B1');
        $this->addSql('ALTER TABLE rpactivite DROP FOREIGN KEY FK_3CC2747A9B0F88B1');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3E03F15C0');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B87555155582E9C0');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCE455FCC0');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7E455FCC0');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7DDEAB1A3');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7C68BE09C');
        $this->addSql('ALTER TABLE rpactivite DROP FOREIGN KEY FK_3CC2747AB3E9C81');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E31664D154');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3139DF194');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCB70FF80C');
        $this->addSql('ALTER TABLE production DROP FOREIGN KEY FK_D3EDB1E0B70FF80C');
        $this->addSql('ALTER TABLE rpactivite DROP FOREIGN KEY FK_3CC2747AB70FF80C');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7953C1C61');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7F6203804');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3D0C00A17');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E349FB9F8D');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE bac');
        $this->addSql('DROP TABLE bloc');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE enseignant');
        $this->addSql('DROP TABLE etudiant');
        $this->addSql('DROP TABLE localisation');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE `option`');
        $this->addSql('DROP TABLE production');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE rp');
        $this->addSql('DROP TABLE rpactivite');
        $this->addSql('DROP TABLE source');
        $this->addSql('DROP TABLE statut');
        $this->addSql('DROP TABLE ville');
    }
}
