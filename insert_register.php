

<?php 
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "secret_santa_login";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("connection failed: ". mysqli_connect_error());
}

$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];


if ($_POST ['password'] === $_POST ['confirm']) {

$sql = "INSERT INTO clients (name, email, username, password, confirm) VALUES ('$name', '$email', '$username','$password','$confirm')";

}


if (!mysqli_query($conn,$sql)) {
	echo "Error: Please try agin. Remember to enter in the same password. ".$sql . "<br>" . mysqli_error($conn);
header ("refresh:4; url=index.php");
} 


else { 

header("location:secret_santa.php");
mysqli_close($conn);

}


?>




