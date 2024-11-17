<?php

$id = $_GET['id'];


require "inc/conn.php";
$q = "DELETE FROM department WHERE id = $id";
$resut = $conn->query($q);

if($resut){
    header("Location: index.php");
}