<?php
include("header.php");
$conn = new mysqli("localhost", "root", "", "medease");
if(isset($_POST['SubmitButton'])){ //check if form was submitted		
		$input = $_POST['inputText']; //get input text
		session_start();
		$sid=$_SESSION['user'];
		$sql ="UPDATE doctors SET pass='$input' WHERE email='$sid'";
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
	 <div class="modal fade bac-modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content login-modal">
                <button type="button"  onclick="mysigninclickFunction()" class="btn btn-default close-mdl" data-dismiss="modal"><img src="assets/images/login/2.png" /> </button>
				<div class="row">
					<div class="col-lg-6">
						<div class="errormsg"> </div>
						<div class="login-top">                                            
						<div class="main-lg-new active" id="signinlist">
							<form  action="login.php" method="post" data-parsley-validate="" class="validate">
								<div class="col-lg-12">
									<h3><span><img src="assets/images/home/1.png" /></span>SIGN IN</h3>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="email" name="email" class="form-control" id="email" placeholder="Email" data-parsley-trigger="change" data-parsley-type="email" required="">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="password" name="pass" class="form-control" id="password" placeholder="Password" data-parsley-minlength="6" required="">
									</div>
								</div>
								<div class="form-group">						
								<select class="form-control" class="selectmedtype"  name="type"   required="">
									<option class="docfirstinnings"  disabled  selected >Select Type</option>
									<option class="docfirstinnings"  value="Doctor">Doctor</option>
									<option class="docfirstinnings"  value="Patient">Patient</option>
								</select>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<div class="forget-pass">
											<h4><a href="javascript:void(0);" class="frgt-pass">Forgot your Password?</a></h4>
											<button type="submit"  name="login" class="log-in-a">Signin button</button>
										</div>
									</div>							  	
								</div>
								
							</form>
						</div>						
						<!---- new --->
						<div class="main-lg-reset">
							<form id="form_forgot" action="#" method="post" data-parsley-validate="" class="validate">
								<div class="col-lg-12">
									<h3><span><img src="assets/images/home/2.png" /></span>Forgot Password</h3>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="email" name="email" id="femail" class="form-control"  placeholder="Email" >
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<div class="forget-pass">
											<h4><button type="submit" class="log-in-a">Submit</button></h4>
										</div>
									</div>
								</div>
							</form>
						</div>					
					</div>
				</div>			  			  
				<div class="col-lg-6">
					<div class="bac-right-login">
						<h4>I'm new in MedEase</h4>
						<h5>Sign up for a account to book an appointment right now!</h5>
						<a href = "presignup.php">I'm new in MedEase</a>
					</div>
				</div>
			</div>
		</div>
        </div>
    </div>

	
           <?php
include("footer.php");
?>