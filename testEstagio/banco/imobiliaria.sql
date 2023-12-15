create database imobiliaria;
use imobiliaria;

create table faleComigo(
id int(11) auto_increment primary key,
nome varchar(150) not null,
email varchar(200) not null,
celular int(11) not null,
mensagem longtext not null
);

create table cadCliente(
id int(11) auto_increment primary key,
nome varchar(150) not null,
celular int(11) not null,
email varchar(200) not null,
senha varchar(20) not null
);

create table cadVendedor(
id int(11) auto_increment primary key,
cep int(6) not null,
nomeRua varchar(200) not null,
numero int(11) not null,
complemento varchar(100) not null,
celular int(11) not null,
email varchar(200) not null,
valor double(9,2) not null,
imagem longblob not null
);