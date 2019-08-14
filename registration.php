<?php
$conn = new mysqli("localhost", "root", "", "medease");
if(isset($_POST['doctor'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$time = $_POST['time'];
$pass = $_POST['pass'];
$city = $_POST['city'];
$desc = $_POST['desc'];
$address = $_POST['address'];
$fees = $_POST['fees'];
$sex = $_POST['sex'];
$special = $_POST['special'];
			$sql = "INSERT INTO doctors (email,pass,name,address,contact,fees,time,special,description,city,sex) VALUES ('$email', '$pass', '$name', '$address','$phone','$fees','$time','$special,','$desc','$city','$sex')";
			mysqli_query($conn, $sql);
			session_start(); 
			$_SESSION['success']="Success";
			header("location:doctor.php");
}

if(isset($_POST['patient'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];	
$sex = $_POST['sex'];
$pass = $_POST['pass'];
$sql = "INSERT INTO patients (name,phone,email,pass,sex) VALUES ('$name', '$phone','$email','$pass','$sex')";
			mysqli_query($conn, $sql);
			session_start(); 
			$_SESSION['success']="Success";
			header("location:patient.php");
	
}


?>