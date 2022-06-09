create database agrotech;
use agrotech;

create table faleConosco(
	id int(2) auto_increment primary key not null,
    nomeCompleto varchar(80) not null,
    email varchar(100) not null,
    telefone varchar(15) not null,
    motivo varchar(1) not null,
    assunto varchar(80) not null,
    mensagem varchar(1400) not null
);