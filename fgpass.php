<?php
$conn = new mysqli("localhost", "root", "", "medease");
if(isset($_POST['fgpass'])){
$phone = $_POST['phone'];	
$email = $_POST['email'];
$type = $_POST['type'];
$pass = $_POST['npass'];	
if($type=="Doctor"){
		
	  $sql = "SELECT email FROM doctors WHERE email = '$email' and contact = '$phone'" or die('Error');
      $result = mysqli_query($conn,$sql);
      $count=mysqli_num_rows($result);
	  echo $count;
      if($count >0) {
        $sql ="UPDATE doctors SET pass='$pass' WHERE email='$email'";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
		
         header("location: index.php");
      }
}
	  else if ($type=="Patient"){
		 $sql = "SELECT email FROM patients WHERE email = '$email' and phone = '$phone'" or die('Error');
		$result = mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);
		echo $count;
      if($count >0) {
         $sql ="UPDATE patients SET pass='$pass' WHERE email='$email'";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
         header("location: index.php"); 
      }
	  }
	  else{
		  header("location: index.php"); 
      }
	  
	  
}	  

?>