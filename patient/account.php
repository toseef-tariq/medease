<?php
include("header.php");
$conn = new mysqli("localhost", "root", "", "medease");
if(isset($_POST['SubmitButton'])){ //check if form was submitted		
		$input = $_POST['inputText']; //get input text
		session_start();
		$sid=$_SESSION['user'];
		$sql ="UPDATE patients SET pass='$input' WHERE email='$sid'";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
		echo '<script>window.location.href="account.php";</script>';
		}  
?>
                
                 <!-- /. ROW  -->
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
					<h3>Change My Password </h3>
                    <div class="panel panel-default" style="padding:50px;background-color:transparent;">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="post" action="account.php">
                                        <div class="form-group">
                                            <label>New Password</label>
                                             <input type="password " name="inputText"  required="" class="form-control" placeholder="*****" />
                                        </div>
                                       
                                     
                                        <button type="submit" class="btn " name="SubmitButton" style="background-color:#a01f62;color:white;">Change Password</button>
 
								</div>
                                    </form>
                                
							</div>
						</div>
                     <!-- End Form Elements -->
                </div>
            </div>
               
    </div>
           <?php
include("footer.php");
?>