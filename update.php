<?php 
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$position = $_POST['position'];
$salary = $_POST['salary'];
$joindate = $_POST['joindate'];
$dateofbirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$departments = $_POST['departments'];

require "inc/function.php";
require "inc/conn.php";


if($_FILES['img']['error'] ==0){
    $img = uploadFile("img");
    $q = "UPDATE employees SET photo='$img',name='$username',
    email='$email',phone='$phone',department='$departments',salary='$salary',
    joindate='$joindate',gender='$gender',status='$status',position='$position',
    address='$address',dateofbirth='$dateofbirth'  WHERE id = $id";
} else {
    $q = "UPDATE employees SET name='$username',
email='$email',phone='$phone',department='$departments',salary='$salary',
joindate='$joindate',gender='$gender',status='$status',position='$position',
address='$address',dateofbirth='$dateofbirth'  WHERE id = $id";
}




$result = $conn->query($q);

if($result){
    header("Location: index.php");
  }
