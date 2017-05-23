DELIMITER $$

DROP FUNCTION IF EXISTS f_authenticate_user$$
CREATE FUNCTION f_authenticate_user(l_username VARCHAR(50), l_password VARCHAR(200)) RETURNS int(11)
BEGIN
	DECLARE l_count INT DEFAULT 0;
	SELECT COUNT(*) INTO l_count FROM users WHERE username = l_username and password = MD5(l_password);
	RETURN l_count;
END$$

DELIMITER ;
