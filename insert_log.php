<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$heshpass = md5($password);


require "inc/conn.php";

$q = "INSERT INTO `login` ( name , email , pass ) VALUES ('$name' , '$email' , '$heshpass')";
$result = $conn->query($q);
if($result){
    header("Location: login.php");
}