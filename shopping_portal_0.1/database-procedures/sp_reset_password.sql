DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_reset_password`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_reset_password`(p_uname VARCHAR(50),p_oldpass VARCHAR(200),p_newpass VARCHAR(200))
BEGIN
	IF f_authenticate_user(p_uname,p_oldpass) THEN
		UPDATE users SET password=MD5(p_newpass) WHERE username=p_uname;
	END IF;
END$$

DELIMITER ;
