DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_insert_order`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_order`(l_prod_cost DECIMAL(20,2), l_shipping_cost DECIMAL(10,2), l_order_status VARCHAR(50), l_payment_status VARCHAR(50),l_user VARCHAR(50),l_shipping_address VARCHAR(50))
BEGIN
	DECLARE p_order_id BIGINT;
	START TRANSACTION;
	INSERT INTO shopping_portal.order(total_product_cost, shipping_cost, order_status, payment_status,user,shipping_addr,datetime) VALUES (l_prod_cost,l_shipping_cost,l_order_status,l_payment_status,l_user,l_shipping_address,now());
	SELECT max(order_id) AS p_order_id FROM shopping_portal.order;
	COMMIT;
END$$

DELIMITER ;
