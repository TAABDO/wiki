CREATE DATABASE gesto_wikis

CREATE TABLE role (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255),
);
CREATE TABLE tag (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255)
);
CREATE TABLE categorie (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255),
    
);
CREATE TABLE role (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255),
);
CREATE TABLE utilisateur(

    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255),
    email VARCHAR(255),
    motedepasse VARCHAR(255),
    role_id int,
    FOREIGN KEY (role_id) REFERENCES role(id) on delete CASCADE on update CASCADE
);

CREATE TABLE wiki (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255),
    titre VARCHAR(255),
    contenu VARCHAR(255),
    image VARCHAR(255),
    statut BOOLEAN,
    utilisateur_id INT,
    categorie_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (categorie_id) REFERENCES categorie(id) ON DELETE CASCADE ON UPDATE CASCADE
);



CREATE TABLE tag_wiki (
    tag_id INT,
    wiki_id INT,
    FOREIGN KEY (tag_id) REFERENCES tag(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (wiki_id) REFERENCES wiki(id) ON DELETE CASCADE ON UPDATE CASCADE
);