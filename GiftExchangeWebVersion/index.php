<html>
<head>
  <title> Registration for 2020 Secret Santa Gift Exchange</title>
  <link rel="stylesheet" type="text/css" href="register.css" media="screen">
  <style type="text/css"></style>
</head>	

<!--login button -->
<form action="login.php" method="POST">
		<input type="submit" value="Login" class="login" >
	</form>

  
<body>
<div class="title"> 
    <h1>WELCOME</h1> 
  </div>
	<!--sign-up form -->
	<form action="insert_register.php" method="POST">

		<input type="text" name="name" class="information" placeholder="Name"required><br>
		<input type="email" name="email" class="information" placeholder="Email"required><br>
		<input type="text" name="username" class="information" placeholder="Username"required><br>
		<input type="password" name="password"class="information" placeholder="Password" required><br>
		<input type="password" name="confirm" class="information" placeholder="Confirm Password"required><br>
			<input type="submit" value="Sign Up" class="submit">
	</form>

<img src="SantaSleigh.png" class="sheigh" alt="Santa sleigh" align="right">


</body>
</html>
