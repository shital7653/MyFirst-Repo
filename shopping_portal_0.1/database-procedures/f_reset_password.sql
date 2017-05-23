DELIMITER $$

DROP FUNCTION IF EXISTS `f_reset_password`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `f_reset_password`(p_user VARCHAR(50)) RETURNS varchar(200) CHARSET latin1
BEGIN
	DECLARE rand_pass VARCHAR(200);
	SELECT SUBSTRING(MD5(UUID()),1,10) INTO rand_pass;
	UPDATE users SET password=MD5(rand_pass) WHERE username=p_user;
	RETURN rand_pass;
END$$

DELIMITER ;
