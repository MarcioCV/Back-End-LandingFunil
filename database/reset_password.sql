CREATE DATABASE reset_password;

USE reset_password;

CREATE TABLE reset(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    code VARCHAR(225),
    email VARCHAR(225)
);



DROP DATABASE reset_password;