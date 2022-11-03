CREATE DATABASE Funil_ronald;

USE Funil_ronald;

CREATE TABLE User(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL ,
    name VARCHAR(100),
    phone VARCHAR(20),
    email VARCHAR(225)UNIQUE,
    password VARCHAR(50),
    profile_pictures VARCHAR(225),
    whatsapp_group VARCHAR(225),
    telegram VARCHAR(255),
    link_royalq VARCHAR(225),
    binance VARCHAR(255)

);

CREATE TABLE reset(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    code VARCHAR(225),
    email VARCHAR(225)
);


SELECT * FROM user;

DROP DATABASE Funil_ronald;