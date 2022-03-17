<?php 
$servername = "localhost:8889";
$username = "root";
$password = "root";
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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer; 
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'lauren.rowe2544@gmail.com';   // SMTP username 
$mail->Password = 'Wahwah@22';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('lauren.rowe2544@gmail.com', 'CodexWorld'); 
$mail->addReplyTo('lauren.rowe2544@gmail.com', 'CodexWorld'); 
 
// Add a recipient 
$mail->addAddress('19z10ne@gmail.com'); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Email from Localhost by CodexWorld'; 
 
// Mail body content 
$bodyContent = '<h1>How to Send Email from Localhost using PHP by CodexWorld</h1>'; 
$bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>CodexWorld</b></p>'; 
$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
} 
 

 
mysqli_close($conn);

?>
