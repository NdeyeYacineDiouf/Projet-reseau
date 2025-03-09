CREATE DATABASE IF NOT EXISTS smarttech;
USE smarttech;

CREATE TABLE IF NOT EXISTS employes (
    employe_id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telephone VARCHAR(20),
    poste VARCHAR(50) NOT NULL,
    salaire DECIMAL(10,2) NOT NULL,
    date_embauche DATE NOT NULL,
    departement VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS clients (
    client_id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    societe VARCHAR(100) NOT NULL,
    contact VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telephone VARCHAR(20),
    adresse TEXT,
    date_ajout DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS documents (
    document_id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(100) NOT NULL,
    description_fichier TEXT,
    chemin_fichier VARCHAR(255) NOT NULL,
    date_upload TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
