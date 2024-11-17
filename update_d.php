<?php

$id = $_POST['id'];
$username = $_POST['username'];
$room = $_POST['room'];


require "inc/conn.php";
$q = "UPDATE department SET dept_name='$username',dept_room='$room' WHERE id = $id";
$result = $conn->query($q);

if($result){
    header('Location: dept.php');
}