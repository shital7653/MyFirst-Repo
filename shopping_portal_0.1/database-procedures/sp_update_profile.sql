DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_update_profile`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_profile`(p_uname VARCHAR(50),p_fname VARCHAR(50),p_lname VARCHAR(50)
	, p_sec_ques VARCHAR(200), p_sec_ans VARCHAR(200), p_email VARCHAR(100), p_phone BIGINT(12),
	 p_dob DATE)
BEGIN
	UPDATE users SET fname=p_fname, lname=p_lname, email=p_email, dob=p_dob, phone=p_phone, sec_question=p_sec_ques, sec_ans=p_sec_ans WHERE username=p_uname;
END$$

DELIMITER ;
