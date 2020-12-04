drop database if exists dados;
create database if not exists dados;

use dados;

create table dados.estudantes (
    id int not null primary key  AUTO_INCREMENT,
    nome varchar(100) not null,
    telefone bigint(50)
);
