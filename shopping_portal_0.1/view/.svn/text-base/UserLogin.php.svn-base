<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<head>
		<title>Online Shopping Portal::Home</title>
		<?php include_once "meta.php" ?>
		<?php include_once "../conf/messages.inc.php" ?>
		<link rel="stylesheet" type="text/css" href="css/current/form.css" />
	</head>
	<body>
		<?php include_once "header.php" ?>
		<?php include_once "menu.php" ?>
		<div id="content">
			<form action="../controller/UserLogin.php">
				<fieldset>
					<legend>Log In Form</legend>
					
					<p>
					<label for="uname">User Name:</label>
					<input type="text" name="uname" id="uname" 
					value="<?php if(isset($_SESSION['login_form']['uname'])) echo htmlspecialchars($_SESSION['login_form']['uname']);?>"
					/>
					</p>
					
					<p>
					<label for="passwd">Password:</label>
					<input type="password" name="passwd" id="passwd" />
					</p>
					
					<p class="submit">
					<input type="submit" value="submit" />
					</p>
					
					<p>
					<span id="error">
					<?php if(isset($_SESSION['login_form']['m'])) echo htmlspecialchars($msg[$_SESSION['login_form']['m']]);?>
					</span>
					</p>
					
					<p>
					Unregistered User <a href="UserRegistration.php">Click Here</a><br/>
					</p>
					
					<p>
					Forgot Password <a href="ForgotPassword.php">Click Here</a>
					</p>
					
				</fieldset>
			</form>
		</div>
		<?php include_once "footer.php" ?>
	</body>
</html>
