CREATE DATABASE sistemaweb;
USE sistemaweb;

CREATE TABLE usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
nombres VARCHAR(100),
usuario VARCHAR(100),
password VARCHAR(255),
estado VARCHAR(20)
);

INSERT INTO usuarios(nombres,usuario,password,estado)
VALUES('Administrador','admin',MD5('123456'),'ACTIVO');