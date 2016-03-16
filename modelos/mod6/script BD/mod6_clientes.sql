
CREATE DATABASE projquery;

use projquery;

create table mod6_clientes(
	id 			int(11)				not null 		auto_increment,
	nome 		varchar(255) 		not null,
	sobrenome 	varchar(255) 		not null,
	email		varchar(255)		not null,
	telefone	varchar(255)		not null,
	senha 		varchar(255)		not null,
	cod			varchar(13)			not null,
	data_cadastro 	timestamp		not null,
	primary key (id)
);


