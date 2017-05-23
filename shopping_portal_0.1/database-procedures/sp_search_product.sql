DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_search_products`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_search_products`(l_search_by VARCHAR(200))
BEGIN
	DECLARE p_search_term VARCHAR(200) DEFAULT NULL;
	SET p_search_term=CONCAT('%',l_search_by,'%');
 	SELECT product_id,name, price, image_url, quantity FROM products WHERE name LIKE p_search_term OR description LIKE p_search_term;
END$$

DELIMITER ;
