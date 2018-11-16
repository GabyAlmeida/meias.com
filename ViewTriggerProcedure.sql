
//lista de pedidos realizados entre um intervalo de datas

DELIMITER $$
CREATE PROCEDURE pedidos_data(IN inicio INT,IN fim INT)
BEGIN
SELECT * FROM pedido WHERE datacompra>=inicio AND datacompra<=fim;
END $$
DELIMITER ;

