CREATE DATABASE Funil_ronald;

use Funil_ronald;

DROP TABLE IF EXISTS Userr;

CREATE TABLE Userr(
    id INT AUTO INCREMENT NOT NULL PRIMARY KEY,
    full_name VARCHAR(100),
    phone VARCHAR(20),
    email VARCHAR(225),
    password_ VARCHAR(50),
    profile_pictures VARCHAR(500),
    whatsapp_group VARCHAR(500),
    telegrama_group VARCHAR(500)
)

