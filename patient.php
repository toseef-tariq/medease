<?php	
session_start(); 
include("header.php");
include("find.php");
?>
<body onload="initialize()"><div class="container">
	<div class="row">
		<div class="col-lg-7">
		<div class="join-now-doc" >
				<h3 style="text-align:center;"><?php  if(isset($_SESSION['success'])){ echo "Successfully registered!";};session_unset();?></h3>
			</div>

			<div class="join-now-doc">
				<h3>Join now</h3>
			</div>
			<div class="row">
								<div class="join-now-doc-1">
					<form role="form"  action="registration.php" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data" >
						<div class="col-lg-6">
							<div class="form-group">
								<input type="hidden" name="status" id="status" value="1">
								<label for="exampleInputPassword1">Full Name</label>
								<input type="text" name="name" class="form-control" id="exampleInputPassword1" data-parsley-pattern="^[a-zA-Z\  \/]+$" placeholder="Enter Name " data-parsley-minlength="3" data-parsley-maxlength="25"required =" ">
							</div>
							
							<div class="form-group">
								<label for="exampleInputPassword1">Email</label>
								<input type="text" name="email" class="form-control" id="exampleInputPassword1" data-parsley-trigger="change" data-parsley-type="email" placeholder="Enter Email "required="">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Create a Password</label>
								<input type="password" name="pass" class="form-control" id="exampleInputPassword1" data-parsley-minlength="6" required="" placeholder="* * *  ">
							</div>
						</div>
						<div class="col-lg-6">
						<div class="form-group">
								<label for="exampleInputPassword1">Contact</label>
								<input type="text" name="phone" class="form-control" id="exampleInputPassword1"  placeholder="Enter Phone" required =" " placeholder="Enter Phone No.">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Sex</label>
								<div class="radio">
									<label><input type="radio" value="male" name="sex" required >Male</label>
								</div>
								<div class="radio">
									<label><input type="radio" value="female" name="sex" required >Female</label>
								</div>
							</div>
							<div class="clearfix"></div>                             
							<div class="form-group">                              
								<div class="checkbox">
									<label><input type="checkbox" value="agreed" name="terms" required>I Agree to the Terms and Conditions</label>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" name="patient" class="btn btn-default btn-continue">Continue</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="bac-right-login-2">
				<h3>You’ll love being on MedEase</h3>
				<ul>
					<li>Access MedEase network of more than 5 million patients.</li>
					<li>Let patients schedule appointments with you instantly, 24-7, from MedEase and from your practice website.</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--footer-->
<?php	include("footer.php");	?>
<!--footer-->
