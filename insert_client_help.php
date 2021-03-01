<?php

  $servername = "localhost";
  $username = "root";
  $password = "password";
  $dbname = "secret_santa_login";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
	die("connection failed: ". mysqli_connect_error());
  }

  
  $name = $_POST['name']; 
  $email = $_POST['email']; 
  $message = $_POST['message']; 

  $sql = "INSERT INTO client_help (name, email, message) VALUES ('$name', '$email', '$message')";

  if (!mysqli_query($conn,$sql)) {
	echo "Error: ".$sql . "<br>" . mysqli_error($conn);
  } 


  header("refresh:1; url=secret_santa.php");
  mysqli_close($conn);


?>
