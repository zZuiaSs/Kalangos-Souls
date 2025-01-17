CREATE DATABASE reservas;
USE reservas;

CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    email VARCHAR(90) NOT NULL,
    telefone VARCHAR(14) NOT NULL
);

CREATE TABLE espaço (
    id_espaco INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    tipo VARCHAR(80) NOT NULL,
    capacidade INT NOT NULL,
    descrição VARCHAR(200)
);

CREATE TABLE reservas (
    id_usuario INT,
    id_espaco INT,
    horário DATE NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    FOREIGN KEY (id_espaco) REFERENCES espaço(id_espaco)
);

DROP 