<html>
<head>
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="css/current/form.css" />
</head>
<body>
		<div id="content">
			<form action="CProductInsert.php">
				<fieldset>
					<legend>Insert Product</legend>
					
					<p>
					<label for="pname">Product Name:</label>
					<input type="text" name="pname" id="pname" 
					value="<?php if(isset($_SESSION['prod_form']['pname'])) echo htmlspecialchars($_SESSION['prod_form']['pname']);?>"
					/>
					</p>
					
					<p>
					<label for="desc">Description</label>
					<input type="hidden"/>
					<textarea name="desc">
					<?php if(isset($_SESSION['prod_form']['desc'])) echo htmlspecialchars($_SESSION['prod_form']['desc']);?>
					</textarea>
					</p>
					
					<p>
					<label for="price">Price:</label>
					<input type="text" name="price" id="price" 
					value="<?php if(isset($_SESSION['prod_form']['price'])) echo htmlspecialchars($_SESSION['prod_form']['price']);?>"
					/>
					</p>
					
					<p>
					<label for="quantity">Available Quantity:</label>
					<input type="text" name="quantity" id="quantity" 
					value="<?php if(isset($_SESSION['prod_form']['quantity'])) echo htmlspecialchars($_SESSION['prod_form']['quantity']);?>"
					/>
					</p>
	
					<p>
					<label for="image">Image:</label>
					<input type="hidden" name="image" value=""/>
					<!--<a target="_blank"> Click here to upload the image </a>-->
					</p>
					
					<p class="submit">
					<input type="submit" value="submit" />
					</p>
								
					<p>
					<span id="error">
					<?php if(isset($_SESSION['login_form']['m'])) echo htmlspecialchars($msg[$_SESSION['login_form']['m']]);?>
					</span>
					</p>
					
					
				</fieldset>
			</form>
		</div>
	</body>
</html>
