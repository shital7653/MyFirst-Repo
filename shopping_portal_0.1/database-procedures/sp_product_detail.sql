DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_product_detail`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_product_detail`(l_product_id BIGINT)
BEGIN
	SELECT name, description, price, quantity, image_url FROM products WHERE product_id=l_product_id;
END$$

DELIMITER ;
