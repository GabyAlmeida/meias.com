

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
    old.estoque_minimo,'#',
    old.estoque_maximo
    )
); 
END//

create or replace view relatorio_pedido_endereco
As 
SELECT pe.idpedido, pe.idusuario, en.rua, en.bairro, en.cidade, en.cep
FROM pedido pe INNER JOIN endereco en
ON en.idendereco = pe.idendereco

(caso for retirar um produto no estoque utilizar o sinal negativo)

DELIMITER //
  CREATE PROCEDURE `AtualizaEstoque`( `id_prod` int, `qtde_comprada` int)
BEGIN
    declare contador int(11);
 
    SELECT count(*) into contador FROM estoque WHERE id_produto = id_prod;
 
    IF contador > 0 THEN
        UPDATE estoque SET qtde=qtde + qtde_comprada
        WHERE id_produto = id_prod;
    ELSE
        INSERT INTO estoque (id_produto, qtde) values (id_prod, qtde_comprada);
    END IF;
END //
DELIMITER ;

DELIMITER //
CREATE TRIGGER EntradaProduto_AI AFTER INSERT ON `entrada_produto`
FOR EACH ROW
BEGIN
      CALL AtualizaEstoque (new.id_produto, new.qtde);
END //
DELIMITER ;

DELIMITER //
CREATE TRIGGER EntradaProduto_AU AFTER UPDATE ON `entrada_produto`
FOR EACH ROW
BEGIN
      CALL AtualizaEstoque (new.id_produto, new.qtde - old.qtde);
END //
DELIMITER ;

DELIMITER //
CREATE TRIGGER EntradaProduto_AD AFTER DELETE ON entrada_produto
FOR EACH ROW
BEGIN
      CALL AtualizaEstoque (old.id_produto, old.qtde * -1);
END //
DELIMITER ;

DELIMITER //
CREATE TRIGGER SaidaProduto_AI AFTER INSERT ON saida_produto
FOR EACH ROW
BEGIN
      CALL AtualizaEstoque (new.id_produto, new.qtde * -1);
END //
DELIMITER ;

DELIMITER //
CREATE TRIGGER SaidaProduto_AU AFTER UPDATE ON saida_produto
FOR EACH ROW
BEGIN
      CALL AtualizaEstoque (new.id_produto, old.qtde - new.qtde);
END //
DELIMITER ;

DELIMITER //
CREATE TRIGGER `TRG_SaidaProduto_AD` AFTER DELETE ON `saida_produto`
FOR EACH ROW
BEGIN
      CALL AtualizaEstoque (old.id_produto, old.qtde);
END //
DELIMITER ;

