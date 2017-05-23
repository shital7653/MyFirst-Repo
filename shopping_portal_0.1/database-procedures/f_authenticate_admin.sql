DELIMITER $$

DROP FUNCTION IF EXISTS `shopping_portal`.`f_authenticate_admin`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `f_authenticate_admin`(l_username VARCHAR(50),l_password VARCHAR(50)) RETURNS int(11)
BEGIN
	DECLARE exist INT DEFAULT 0;
	SELECT count(*) INTO exist FROM admin WHERE username=l_username and password=MD5(l_password);
	RETURN exist;
END$$

DELIMITER ;
