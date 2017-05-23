<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<head>
		<title>Online Shopping Portal::Update Profile</title>
		<?php include_once "meta.php" ?>
		<?php include_once "../conf/messages.inc.php" ?>
		<link rel="stylesheet" type="text/css" href="css/current/form.css" />
		<script type='text/javascript' src='js/validation.js' ></script>
		<script type="text/javascript">
			var mail_arr=new Array('uname');
			function checkEmail(){
				if(check_null('email','val_email')){
					check_RegExp('email','val_email',/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9])+(\.[a-zA-Z0-9_-]+)+$/,'Email id is in wrong format')
				}
			}
			function checkPhone(){
				if(check_null('phone','val_phone') && check_length('phone','val_phone',10)){
					check_numeric('phone','val_phone');
				}
			}
			function show_other_ques(){
				if(document.getElementById('sec_question').value==3){
					document.getElementById('otherques').style.display= 'block';
				}else{
					document.getElementById('otherques').style.display= 'none';
				}
			}
		</script>
	</head>
	<body>
		<?php include_once "header.php" ?>
		<?php include_once "menu.php" ?>
		<?php	
			include_once('../model/UserUpdate.php');
			getUserData();
			$upd_form=$_SESSION['upd_form_db'];
			if(isset($_SESSION['upd_form'])){
				$upd_form=$_SESSION['upd_form'];
				//print_r($_SESSION['upd_form']);
				unset($_SESSION['upd_form']);
			}
		?>
		<div id="content">
		<?php
		if(isset($_SESSION['user_name'])){
		?>
			<form action="../controller/UserUpdate.php" method="post">
				<fieldset>
					<legend>Personal Information</legend>
					
					<p>
					<label for="fname">First Name:</label>
					<input type="text" name="fname" id="fname" onblur="check_null('fname','val_fname')"
					value="<?php if(isset($upd_form['fname'])) echo htmlspecialchars($upd_form['fname']);?>" />
					<span class='error' id='val_fname'></span>
					</p>
					
					<p>
					<label for="lname">Last Name:</label>
					<input type="text" name="lname" id="lname" onblur='check_null("lname","val_lname")'
					value="<?php if(isset($upd_form['lname'])) echo htmlspecialchars($upd_form['lname']);?>" />
					<span class='error' id='val_lname'></span>
					</p>
					
					<p>
					<label for="email">Email ID:</label>
					<input type="text" name="email" id="email" onblur='checkEmail()'
					value="<?php if(isset($upd_form['email'])) echo htmlspecialchars($upd_form['email']);?>" />
					<span class='error' id='val_email'></span>
					</p>
					
					<p>
					<label for="date">Date of Birth:</label>
					<select name="date" id="date" onchange="check_date()">
					<?php
						for($i=1;$i<=31;$i++){
							if(isset($upd_form['date']) && $upd_form['date']==$i){
								echo "<option value='$i' selected='selected'>$i</option>";
							}else{
								echo "<option value='$i'>$i</option>";
							}
						}
					?>
					</select>
					<select name="month" id="month" onchange='check_date()'>
					<?php
						for($i=1;$i<=12;$i++){
							$month=array('','January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
							if(isset($upd_form['month']) && $upd_form['month']==$i){
								echo "<option value='$i' selected='selected'>$month[$i]</option>";
							}else{
								echo "<option value='$i'>$month[$i]</option>";
							}
							
						}
					?>
					</select>
					<select name="year" id="year" onblur="check_date()">
					<?php 
						date_default_timezone_set('Asia/Calcutta');
						for($i=date('Y');$i>=1900;$i--){
							if(isset($upd_form['year']) && $upd_form['year']==$i){
								echo "<option value='$i' selected='selected'>$i</option>";
							}else{
								echo "<option value='$i'>$i</option>";
							}
						}
					?>
					</select>
					<span class='error' id='val_date'></span>
					</p>
					
					<p>
					<label for="phone">Phone:</label>
					<input type="text" name="phone" id="phone" onblur='checkPhone()'
					value="<?php if(isset($upd_form['phone'])) echo htmlspecialchars($upd_form['phone']);?>" />
					<span class='error' id='val_phone'></span>
					</p>
					
					<p id="otherques">
					<label for="other_ques">Your Question:</label>
					<input type="text" name="other_ques" id="other_ques" onblur="check_null('other_ques','val_other_ques')"
					value="<?php if(isset($upd_form['other_ques'])) echo htmlspecialchars($upd_form['other_ques']);?>" />
					<span class='error' id='val_other_ques'></span>
					</p>
					
					<p>
					<label for="sec_ans">Security Answer:</label>
					<input type="text" name="sec_ans" id="sec_ans" onblur="check_null('sec_ans','val_sec_ans')"
					value="<?php if(isset($upd_form['sec_ans'])) echo htmlspecialchars($upd_form['sec_ans']);?>" />
					<span class='error' id='val_sec_ans'></span>
					</p>
					
					<p class="submit">
					<input type="submit" value="submit" />
					</p>
					
					<p>
					<span id="error">
					<?php if(isset($upd_form['m'])) echo $msg[$upd_form['m']];?>
					</span>
					</p>

				</fieldset>
			</form>
			<?php unset($_SESSION['upd_form']); unset($_SESSION['upd_form_db']); ?>
			<?php
			}
			else{
				header('location: UserLogin.php');
			}
			?>
		</div>
		<?php include_once "footer.php" ?>
	</body>
</html>
