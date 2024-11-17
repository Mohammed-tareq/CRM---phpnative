<?php
$email = $_POST["email"];   
$password = $_POST["password"];
$heshpass = md5($password);

require "inc/conn.php";

$q = "SELECT * FROM `login` WHERE email = '$email' AND  pass ='$heshpass'";
$result = $conn->query($q);
$row = $result->num_rows;

if($row == 1){
    $user = $result->fetch_assoc();

    session_start();
    $_SESSION["name"] = $user["name"];
    $_SESSION["id"] = $user["id"];

    header('Location: index.php');

}else{
    header('Location: login.php');
}
