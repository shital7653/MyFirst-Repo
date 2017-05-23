DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_insert_order_item`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_order_item`(l_order_id BIGINT, l_product_id BIGINT, l_quantity BIGINT, l_amount DECIMAL(20,2))
BEGIN
	INSERT INTO order_items(order_id, product_id,quantity,amount) VALUES(l_order_id,l_product_id,l_quantity,l_amount); 
END$$

DELIMITER ;
