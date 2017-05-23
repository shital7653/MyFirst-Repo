DELIMITER $$

DROP FUNCTION IF EXISTS `f_user_exists`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `f_user_exists`(user_name VARCHAR(50)) RETURNS int(11)
BEGIN
	DECLARE count_user INT DEFAULT 0;
	SELECT COUNT(*) INTO count_user FROM users WHERE username=user_name;
	RETURN count_user;
END$$

DELIMITER ;
