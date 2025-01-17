create database Reservas;
use Reservas; 

create table usuario(
	id_usuario int auto_increment primary key,
    nome varchar(80),
    email varchar(90),
    telefone varchar(14)
);

