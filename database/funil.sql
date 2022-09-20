CREATE DATABASE Funil_ronald;

USE Funil_ronald;

CREATE TABLE User(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL ,
    name VARCHAR(100),
    phone VARCHAR(20),
    email VARCHAR(225),
    password VARCHAR(50),
    profile_pictures VARCHAR(500),
    whatsapp_group VARCHAR(500),
    telegrama_group VARCHAR(500)
);

SELECT * FROM User;