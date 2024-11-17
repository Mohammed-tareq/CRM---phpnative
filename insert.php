<?php 
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
$img = uploadFile("img");

if($_FILES['img']['error'] !=0){
    $img = "https://www.pngitem.com/pimgs/m/35-350426_profile-icon-png-default-profile-picture-png-transparent.png";
}


require "inc/conn.php";

$q = "INSERT INTO employees( photo, name, email, phone, department, salary, joindate,
gender, status, position, address, dateofbirth)
VALUES ('$img' , '$username' , '$email' , '$phone' , '$departments' , $salary , '$joindate' , '$gender' , '$status',
'$position' , '$address' , '$dateofbirth')";

$result = $conn->query($q);

if($result){
    header("Location: index.php");
  }
