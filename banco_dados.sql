DROP DATABASE DBLOJA;
CREATE DATABASE DBLOJA;
USE DBLOJA;

CREATE TABLE usuario(
	idusuario INT AUTO_INCREMENT,
	nomeusuario VARCHAR(60),
	email VARCHAR(60),
	senha VARCHAR(60),
	cpf VARCHAR(60),
	datadenascimento VARCHAR(10),
	sexo VARCHAR(60),
	tipousuario VARCHAR(5),
	PRIMARY KEY(idusuario)
) engine = innodb;



CREATE TABLE produtos(
	idproduto INT AUTO_INCREMENT,
	preco float(30),
	nomeproduto VARCHAR(30),
	descricao VARCHAR(60),
	tamanho VARCHAR(60),
	imagem VARCHAR(60),
	sexo VARCHAR(60),
	categoria VARCHAR(60),
	PRIMARY KEY(idproduto)
) engine = innodb;


CREATE TABLE pedido(
	idpedido INT AUTO_INCREMENT,
	idusuario INT NOT NULL, 
	idproduto INT NOT NULL,
	datacompra date,
	dataentrega date,
	PRIMARY KEY(idpedido),
	FOREIGN KEY(idusuario) REFERENCES usuario(idusuario),
	FOREIGN KEY(idproduto) REFERENCES produtos(idproduto)
) engine = innodb;

CREATE TABLE pedido_produto(
	idpedi_prod INT AUTO_INCREMENT,
	idproduto INT NOT NULL,
	idpedido INT NOT NULL,
	PRIMARY KEY(idpedi_prod),
	FOREIGN KEY(idproduto) REFERENCES produtos(idproduto),
	FOREIGN KEY(idpedido) REFERENCES pedido(idpedido)
) engine = innodb;

CREATE TABLE endereco(
	idendereco INT AUTO_INCREMENT,
	idusuario INT NOT NULL,
        nome varchar(60) not null,
        rua varchar(60) not null,
        bairro varchar(60) not null,
        cidade varchar(60) not null,
        cep varchar(60) not null,
	PRIMARY KEY(idendereco),
	FOREIGN KEY(idusuario) REFERENCES usuario(idusuario);
        FOREIGN KEY(nome) REFERENCES usuario(nomeusuario)
) engine = innodb;

