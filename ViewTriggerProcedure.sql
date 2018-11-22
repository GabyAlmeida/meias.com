

DELIMITER // 
CREATE TRIGGER TRG_TBLPRODUTOS_AU_LOG 
AFTER UPDATE ON produtos
FOR EACH ROW 
BEGIN 
INSERT INTO tbl_log_produto(USUARIO,DATA_HORA,ACAO,DADOS) VALUES(CURRENT_USER() ,NOW(),'UPDATE', 
    CONCAT( 
    old.idproduto,'#',
    old.preco,'#',
    old.nomeproduto,'#',
    old.descricao ,'#',
    old.tamanho,'#',
    old.imagem,'#',
    old.sexo,'#',
    old.categoria ,'#',
    old.estoque
    )
); 
END//

create or replace view relatorio_pedido_endereco
As 
SELECT 
FROM pedido pe INNER JOIN endereco en
ON en.idendereco = pe.idendereco




procedure 
view inner join
 estoque, nao deixar comprar, encomendar