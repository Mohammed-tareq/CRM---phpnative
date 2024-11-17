<?php

$username = $_POST['username'];
$room = $_POST['room'];

require "inc/conn.php";

$q = "INSERT INTO department(dept_name , dept_room) VALUE ('$username' , '$room')";
$result = $conn->query($q);
if($result){
    header("Location: dept.php");
}