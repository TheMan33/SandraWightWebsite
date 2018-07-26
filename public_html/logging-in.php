<?php
require_once('path/to/file/class.phpmailer.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$servername = "localhost";
$username = "sandra01";
$password = "wightwoman";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    $conn->close();
    header( 'Location: /unable-to-connect.html' );
}

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT 1 FROM sandrawight.login WHERE username = '$user' AND password = '$pass'";

if ($conn->query($sql) === FALSE) {
    $conn->close();
    header( 'Location: /login-unsuccessful.html' );
} 

$sql = "SELECT * FROM sandrawight.newsletter";

$result = mysql_query($sql);
while($row = mysql_fetch_array($result)) {
echo $row['fieldname'];
}


?>