
CREATE DATABASE agenda;

USE agenda;

CREATE TABLE contatos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefone VARCHAR(50) NOT NULL
);
