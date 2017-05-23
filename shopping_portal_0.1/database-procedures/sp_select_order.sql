DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_select_order`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_order`(l_username VARCHAR(50))
BEGIN
	SELECT * FROM shopping_portal.order WHERE user=l_username;
END$$

DELIMITER ;
