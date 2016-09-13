use projquery;

drop table usuarios;

create table usuarios(
	id 			int(11)				not null 		auto_increment,
	nome 		varchar(255) 		not null,
	email		varchar(255)		not null,
	senha 		varchar(255)		not null,
	cod			varchar(255)		not null,
	cadastro 	datetime			not null,
    nivel		int(11)				not null,
	primary key (id)
);

select * from usuarios;

ALTER TABLE usuarios ADD login VARCHAR( 255 ) after email;
ALTER TABLE usuarios MODIFY login VARCHAR( 255 ) NOT NULL;

#2008-03-09 16:05:07
#827ccb0eea8a706c4c34a16891f84e7b

create table config_manutencao(
	manutencao int not null primary key default '0'
);
select * from config_manutencao;


drop table config_mailserver;

create table config_mailserver(
	id int not null primary key,
    email varchar(255) ,
    senha varchar(255) ,
    porta varchar(255) ,
    server varchar(255) 
);
INSERT INTO `projquery`.`config_mailserver` (`id`) VALUES ('1');

UPDATE config_mailserver SET email = '' WHERE email IS NULL;
UPDATE config_mailserver SET senha = '' WHERE senha IS NULL;
UPDATE config_mailserver SET porta = '' WHERE porta IS NULL;
UPDATE config_mailserver SET server = '' WHERE server IS NULL;

ALTER TABLE config_mailserver modify email varchar(255) NOT NULL;
ALTER TABLE config_mailserver modify senha varchar(255) NOT NULL;
ALTER TABLE config_mailserver modify porta varchar(255) NOT NULL;
ALTER TABLE config_mailserver modify server varchar(255) NOT NULL;

select * from config_mailserver;

create table config_sensorial(
	id int not null primary key,
    titulo varchar(255) ,
    descricao varchar(255) ,
    facebook varchar(255) ,
    twitter varchar(255) 
);

INSERT INTO `projquery`.`config_sensorial` (`id`) VALUES ('1');

UPDATE config_sensorial SET titulo = '' WHERE titulo IS NULL;
UPDATE config_sensorial SET descricao = '' WHERE descricao IS NULL;
UPDATE config_sensorial SET facebook = '' WHERE facebook IS NULL;
UPDATE config_sensorial SET twitter = '' WHERE twitter IS NULL;

ALTER TABLE config_sensorial modify titulo varchar(255) NOT NULL;
ALTER TABLE config_sensorial modify descricao varchar(255) NOT NULL;
ALTER TABLE config_sensorial modify facebook varchar(255) NOT NULL;
ALTER TABLE config_sensorial modify twitter varchar(255) NOT NULL;

select * from config_sensorial;

create table config_endtel(
	id int not null primary key,
    telefone varchar(255) ,
    endereco varchar(255)
);

INSERT INTO `projquery`.`config_endtel` (`id`) VALUES ('1');

UPDATE config_endtel SET telefone = '' WHERE telefone IS NULL;
UPDATE config_endtel SET endereco = '' WHERE endereco IS NULL;

ALTER TABLE config_endtel modify telefone varchar(255) NOT NULL;
ALTER TABLE config_endtel modify endereco varchar(255) NOT NULL;

select * from config_endtel;