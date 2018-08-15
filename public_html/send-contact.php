<?php 
if (!isset($_POST['submit'])){
    echo "Error, you must submit your details!";
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$question = $_POST['question'];

$email_from = 'contact@sandrawight.com';
$email_subject = "$firstname $lastname would like to ask you a question!";
$email_body = "$firstname $lastname would like to ask you the following question: \n".
              "$question. \n To reply, call or text them on $phone, ".
              "or email them on $email.";
echo $email_body;


$email_to = "sandrawight@hotmail.com";
$headers = "From: $email_from \r\n";

if(mail($email_to, $email_subject, $email_body, $headers)){
    header('Location: contact-sent.html');
} else{
    header('Location: contact-unsent.html');
}


?>