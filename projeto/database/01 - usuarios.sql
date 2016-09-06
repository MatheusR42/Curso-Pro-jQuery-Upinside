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
