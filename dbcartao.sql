create table usuario(
	id int not null primary key auto_increment,
    nome varchar(25) not null,
	senha varchar(50) not null
);

insert into usuario(nome, senha)values('Rudolfo', MD5('teste123'));
insert into usuario(nome, senha)values('Daniele', MD5('teste123'));

create table tb_status(
	id int not null primary key auto_increment,
    status varchar(25) not null
);

insert into tb_status(status)values('pendente');
insert into tb_status(status)values('pago');

create table compras(
	id int not null primary key auto_increment,
    id_status int not null default 1,
    foreign key(id_status) references tb_status(id),
	id_usuario int not null default 1,
	foreign key(id_usuario) references usuario(id),
	descricao varchar(50) not null,
	valor float not null,
	num_parcelas int not null,
	valor_parcela float not null,
	parcelas_paga int not null,
	data_compra date not null,
    data_registro datetime not null default current_timestamp
);