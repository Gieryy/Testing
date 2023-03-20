<?php
include 'connection.php';

$username = $_POST['user_name'];
$email = $_POST['user_email'];
$password = ($_POST['user_password']);
$phone = $_POST['user_phone'];

$query = "insert into user values ('', '$username' , '$email', '$password', '$phone','','','')";
mysqli_query($conn, $query);
header("location: register.html");
?>