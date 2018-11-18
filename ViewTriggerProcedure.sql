

DELIMITER // 
CREATE TRIGGER TRG_TBLPRODUTOS_AU_LOG 
AFTER UPDATE ON produtos
FOR EACH ROW 
BEGIN 
INSERT INTO tbl_log(USUARIO,DATA_HORA,ACAO,DADOS) VALUES(CURRENT_USER() ,NOW(),'UPDATE', 
CONCAT( 
old.idproduto,'#',
old.preco,'#',
old.nomeproduto,'#',
old.descricao ,'#',
old.tamanho,'#',
old.imagem,'#',
old.sexo,'#',
old.categoria ,'#',
old.estoque,
) 
); 
END//
