DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_update_order`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_order`(l_order_id BIGINT, l_prod_cost DECIMAL(20,2), l_shipping_cost DECIMAL(10,2), l_order_status VARCHAR(50), l_payment_status VARCHAR(50))
BEGIN
	UPDATE shopping_portal.order SET total_product_cost=l_prod_cost, shipping_cost=l_shipping_cost, order_status=l_order_status, payment_status=l_payment_status;
END$$

DELIMITER ;
