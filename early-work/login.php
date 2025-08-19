<html>
<head>
  <!--names the browser bar and connects to css -->
  <title> Login </title>
  <link rel="stylesheet" type="text/css" href="register.css" media="screen">
  <style type="text/css"></style>
</head>	



  
<body>
<div class="title"> 
    <br><h1>WELCOME</h1> 
  </div>

  <!--sends login data to file insert_login.php  -->
	<form action="insert_login.php" method="POST">

		<input type="text" name="username" class="information" placeholder="Username"required><br>
		<input type="password" name="password"class="information" placeholder="Password" required><br>
			<input type="submit" value="Login" class="submit">
	</form>

<img src="SantaSleigh.png" class="sheigh" alt="Santa sleigh" align="right">


</body>
</html>
