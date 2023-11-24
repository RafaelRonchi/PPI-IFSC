create database if not exists crud;
use crud;

create table item(
    id int not null auto_increment,
    nome varchar(255) not null,
    descricao varchar(255) not null,
    quantidade varchar(255) not null,
    url_image TEXT not null,
    primary key(id)
);

create table pessoa(
    id int not null auto_increment,
    nome varchar(255) not null,
    cpf varchar(255) not null,
    primary key(id)
);
