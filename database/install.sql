DROP DATABASE IF EXISTS media_bug;
CREATE DATABASE media_bug DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE media_bug;

CREATE TABLE media (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(200),
    type VARCHAR(50),
    stock INT
);

CREATE TABLE emprunts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    media_id INT,
    date_emprunt DATE,
    statut VARCHAR(50)
);