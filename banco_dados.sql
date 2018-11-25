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
        estoque_minimo INT(11),
        estoque_maximo INT(11),
	PRIMARY KEY(idproduto)
) engine = innodb;

CREATE TABLE entrada_produto (
identrada INT(11) NOT NULL AUTO_INCREMENT,
id_produto INT(11) NULL DEFAULT NULL,
qtde INT(11) NULL DEFAULT NULL,
data_entrada DATE NULL DEFAULT NULL,
FOREIGN KEY(id_produto) REFERENCES produtos(idproduto),
PRIMARY KEY(identrada)
) engine = innodb;

CREATE TABLE estoque (
idestoque INT(11) NOT NULL AUTO_INCREMENT,
id_produto INT(11) NULL DEFAULT NULL,
qtde INT(11) NULL DEFAULT NULL,
FOREIGN KEY(id_produto) REFERENCES produtos(idproduto),
PRIMARY KEY(idestoque)
) engine = innodb;

CREATE TABLE saida_produto (
idsaida INT(11) NOT NULL AUTO_INCREMENT,
id_produto INT(11) NULL DEFAULT NULL,
qtde INT(11) NULL DEFAULT NULL,
data_saida DATE NULL DEFAULT NULL,
FOREIGN KEY(id_produto) REFERENCES produtos(idproduto),
PRIMARY KEY(idsaida)
) engine = innodb;


CREATE TABLE endereco(
	idendereco INT AUTO_INCREMENT,
	idusuario INT NOT NULL,
        rua varchar(60),
        bairro varchar(60),
        cidade varchar(60),
        cep varchar(60),
	PRIMARY KEY(idendereco),
	FOREIGN KEY(idusuario) REFERENCES usuario(idusuario)
) engine = innodb;

CREATE TABLE pedido(
	idpedido INT AUTO_INCREMENT,
	idusuario INT NOT NULL, 
        idendereco INT NOT NULL, 
	datacompra date,
        valortotal int,
	PRIMARY KEY(idpedido),
	FOREIGN KEY(idusuario) REFERENCES usuario(idusuario),
        FOREIGN KEY(idendereco) REFERENCES endereco(idendereco)
) engine = innodb;

CREATE TABLE pedido_produto(
	idpedi_prod INT AUTO_INCREMENT,
	idproduto INT NOT NULL,
	idpedido INT NOT NULL,
        quantidade INT,
	PRIMARY KEY(idpedi_prod),
	FOREIGN KEY(idproduto) REFERENCES produtos(idproduto),
	FOREIGN KEY(idpedido) REFERENCES pedido(idpedido)
) engine = innodb;

CREATE TABLE cupom(
	idcupom INT AUTO_INCREMENT,
	nomecupom VARCHAR(60),
        desconto INT,
	PRIMARY KEY(idcupom)
) engine = innodb;

CREATE TABLE tbl_log_produto(
ID_LOG INT (11),
TABELA VARCHAR(45),
USUARIO VARCHAR (45),
DATA_HORA DATETIME,
ACAO VARCHAR(45),
DADOS VARCHAR(1000),
PRIMARY KEY(ID_LOG)
) engine = innodb;

