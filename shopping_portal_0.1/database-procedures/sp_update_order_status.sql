DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_update_order_status`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_order_status`(l_order_id BIGINT, l_status VARCHAR(50))
BEGIN
	UPDATE shopping_portal.order SET order_status=l_status WHERE order_id=l_order_id;
END$$

DELIMITER ;
