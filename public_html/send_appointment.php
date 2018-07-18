<?php 
if (!isset($_POST['submit'])){
    echo "Error, you must submit your details!";
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date_array = explode("-", $_POST['date']);
$year = $date_array[0];
$month = $date_array[1];
$day = $date_array[2];
$date = "$day/$month/$year";
$time = $_POST['time'];
$comments = $_POST['comments'];

$email_from = 'appointments@sandrawight.com';
$email_subject = "$firstname $lastname would like an appointment!";
$email_body = "$firstname $lastname would like an appointment on \n".
              "$date at $time.\n To confirm, call or text them on $phone, ".
              "or email them on $email. Message from the client: $comments";
echo $email_body;


$email_to = "sandrawight@hotmail.com";
$headers = "From: $email_from \r\n";

mail($email_to, $email_subject, $email_body, $headers);

header('Location: index.html');
?>