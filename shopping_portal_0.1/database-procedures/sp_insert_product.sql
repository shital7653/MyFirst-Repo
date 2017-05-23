DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_insert_product`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_product`(l_name VARCHAR(50),l_description VARCHAR(5000), l_price DECIMAL(22,2), l_quantity INT(10), l_image_url VARCHAR(500))
BEGIN
	INSERT INTO product(name,description,price,quantity,image_url) VALUES (l_name, l_description, l_price, l_quantity,l_image_url);
END$$

DELIMITER ;
