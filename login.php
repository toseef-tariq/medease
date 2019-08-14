<?php
$conn = new mysqli("localhost", "root", "", "medease");
if(isset($_POST['login'])){
$type = $_POST['type'];	
$email = $_POST['email'];
$pass = $_POST['pass'];	
if($type=="Doctor"){
		
			$sql = "SELECT email FROM doctors WHERE email = '$email' and pass = '$pass'" or die('Error');
      $result = mysqli_query($conn,$sql);
      $count=mysqli_num_rows($result);
      if($count >0) {
         session_start();
         $_SESSION['user'] = $email;       
         header("location: admin/");
      }
}
	  else if ($type=="Patient"){
		 $sql = "SELECT email FROM patients WHERE email = '$email' and pass = '$pass'" or die('Error');
		$result = mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);
      if($count >0) {
         session_start();
         $_SESSION['user'] = $email;
         header("location: patient/index.php"); 
      }
	  }
	  else{
		  header("location: index.php"); 
      }
	  
	  
}	  

?>