<?php 
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "secret_santa_login";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("connection failed: ". mysqli_connect_error());
}

$username=$_POST['username'];
$password=$_POST['password'];

$s = "select * from clients where username = '$username' && password = '$password'";

$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if ($num ==1) {
  header("location:secret_santa.php");
} 

else { 
  echo "Inncorrect username or password please try again";
  header("refresh:3; url=login.php");
}
 
mysqli_close($conn);

?>
