create table mod7_imagens(
	id 			int 			not null auto_increment primary key,
	imagem 			varchar(255) 	not null,
	titulo 			varchar(255) 	not null,
	descricao 		varchar(255)	not null,
	tipo			varchar(255)	not null,
	data_cadastro 	datetime 		not null
);

select * from mod7_imagens;