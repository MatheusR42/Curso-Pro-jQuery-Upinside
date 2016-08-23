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

2008-03-09 16:05:07
827ccb0eea8a706c4c34a16891f84e7b