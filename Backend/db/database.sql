CREATE DATABASE reservas;
USE reservas;

CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL UNIQUE,
    senha VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(90) NOT NULL,
    telefone VARCHAR(14) NOT NULL
);

CREATE TABLE espaco (
    id_espaco INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    tipo VARCHAR(80) NOT NULL,
    capacidade INT NOT NULL,
    descricao VARCHAR(200)
);

CREATE TABLE reservas (
    id_usuario INT,
    id_espaco INT,
    horario DATE NOT NULL
);

select * from usuario;
select * from espaco;

insert into usuario (nome, senha, email, telefone)
values ("Kaiko", "123456", "kaiko@email.com", "+5567940028922");