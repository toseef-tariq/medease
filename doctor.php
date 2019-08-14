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
							<input type="hidden" name="status" id="status" value="2">
							<div class="form-group">
								<label for="exampleInputPassword1">Email</label>
								<input type="text" class="form-control" id="exampleInputPassword1" name="email"  required="" placeholder="Enter Email ">			   								                                 
							</div>
							<div class="clearfix"></div>
							<div class="first_innings">
								<div class="form-group">
								<label for="exampleInputPassword1">Full Name</label>
								<input type="text" class="form-control" id="exampleInputPassword1" name="name"  placeholder="Enter Name " required="">
								
								</div>
								<div class="form-group">
								<label for="exampleInputPassword1">Contact</label>
								<input type="text" class="form-control" id="exampleInputPassword1" name="phone"  placeholder="Enter Phone " required="">		
							</div>
								
								<div class="form-group">
								<label for="exampleSelect1">Select Your Schedule</label>						
								<select class="form-control" class="selectmedtype" id="exampleSelect1" name="time"  onchange="changemedtype(this);" >
													<option disabled selected >Select Time</option>
													<option value="10 AM to 5 PM">10 AM to 5 PM</option>
													<option value="5 PM to 10 PM">5 PM to 10 PM</option>
													<option value="10 PM to 5AM">10 PM to 5AM</option>
								</select>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Description</label>
									<textarea class="form-control" style="resize: none;" rows="3" name="desc" required=""></textarea>	
							   </div>
								<div class="form-group">
									<label for="exampleInputPassword1">Sex</label>
									<div class="radio">
										<label><input type="radio" name="sex" value="Male" >Male</label>
									</div>
									
									<div class="radio">
										<label><input type="radio" name="sex" value="Female" >Female</label>
									</div>
								</div>
							</div>
							                         
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="text" class="form-control" id="exampleInputPassword1" name="pass" placeholder="* * * *">
									
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Address</label>
								<input type="text" class="form-control" id="exampleInputPassword1" name="address"  placeholder="Enter Name " required="">		
							</div>
							<div class="form-group">
								<label for="exampleSelect1">Select Your Fees</label>						
								<select class="form-control" class="selectmedtype" id="exampleSelect1" name="fees"  onchange="changemedtype(this);" >
													<option disabled selected >Select Fee</option>
													<option value="Rs. 500">Rs. 500</option>
													<option value="Rs. 1000">Rs. 1000</option>
													<option value="Rs. 1500">Rs. 1500</option>
													<option value="Rs. 2000">Rs. 2000</option>
								</select>
								</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Select Your Speciality</label>
								<select class="form-control" id="exampleSelect1" name="special" required="" >
									<option  disabled  selected >Select Speciality</option>
										<option value="2">Audiology</option>
																						<option value="Cardiology">Cardiology</option>
																						<option value="Dentistry">Dentistry</option>
																						<option value="Diabetology">Diabetology</option>
																						<option value="Children Medicine">Children Medicine</option>
																						<option value="Family Medicine">Family Medicine</option>
																						<option value="General Medicine">General Medicine</option>
																						<option value="Massage Therapy">Massage Therapy</option>
																						<option value="Nephrology">Nephrology</option>
																						<option value="Neurology">Neurology</option>

								</select>
							</div>							                              
							<div class="form-group">
								<label for="exampleInputPassword1">Select Your Location</label>
								<select class="form-control" id="exampleSelect1" name="city" required="" >
										<option value="" disabled selected>Select The City</option>
								<option value="Islamabad">Islamabad</option>
								<option value="Ahmadpur East">Ahmadpur East</option>
									<option value="Attock">Attock</option>
							<option value="Bahawalnagar">Bahawalnagar</option>
								<option value="Faisalabad">Faisalabad</option>
									<option value="Gujranwala">Gujranwala</option>
											<option value="Gujrat">Gujrat</option>
												<option value="Khanpur">Khanpur</option>
													<option value="Liaquat Pur">Liaquat Pur</option>
											<option value="Multan">Multan</option>
													<option value="Murree">Murree</option>
												<option value="Rahim Yar Khan">Rahim Yar Khan</option>
													<option value="Rawalpindi">Rawalpindi</option>
														<option value="Sadiqabad">Sadiqabad</option>
																<option value="Ghotki">Ghotki</option>
																<option value="Sukkur">Sukkur</option>
																<option value="Peshawar">Peshawar</option>
								</select>
							</div>
							
							<div class="checkbox">
								<label><input type="checkbox" value="agreed" name="terms" required>I Agree to the Terms and Conditions</label>
							</div>
							<div class="form-group">
								<button type="submit" name="doctor" class="btn btn-default btn-continue">Continue</button>
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
					<li>Access MedEase network of  patients.</li>
					<li>Let patients schedule appointments with you instantly, 24-7, from MedEase and from your practice website.</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--footer-->
<?php	include("footer.php"); ?>