<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, inital-scale=1.0">
</head>
	<nav id="nav" role="navigation"> <a href="#nav" title="Show navigation">Show navigation</a> <a href="#" title="Hide navigation">Hide navigation</a>
		<ul>
			
					Sign-In
					<form method="POST" action="login.php">
						<input type="text" name="txtuname" placeholder="enter username">
						<input type="password" name="txtpword" placeholder="enter password">
						<input type="submit" name="login" value="LogIn" style="color:blue;background-color:skyblue;">
					</form>
					
					<div class="navbar1">
				Sign-up
					<form method="POST" action="signup.php">
						<input type="text" name="txtuname" placeholder="enter username">
						<input type="password" name="txtpword" placeholder="enter password">
						<input type="submit" name="signup" value="Signup" style="color:blue;background-color:skyblue;">
					</form>
			</div>
			
  
		</ul>


	</nav>
			

</body>
</html>