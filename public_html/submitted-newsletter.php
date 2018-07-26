<?php
$servername = "localhost";
$username = "sandra01";
$password = "wightwoman";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    $conn->close();
    header( 'Location: /unable-to-connect.html' );
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$sql = "INSERT INTO sandrawight.newsletter (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    header( 'Location: /subscribed.html' );
} else {
    $conn->close();
    header( 'Location: /not-subscribed.html' );
}

?>
