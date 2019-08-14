<!DOCTYPE html>
	<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="UTF-8">
	<title>MedEase</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="admin/uploads/common/1493899510_fav__icon.png" type="image/jpg" sizes="16x16">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>	
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">    
	<link rel="stylesheet" href="maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/hover-min.css">
<!-- Select2 -->
	<link rel="stylesheet" href="assets/css/select2.min.css">
<!-- Theme style -->
	<link rel="stylesheet" href="assets/css/AdminLTE.min.css">		
	<link rel="stylesheet" href="assets/css/common.css"> 
<!--  calendar --->
	<link rel="stylesheet" href="assets/css/appointment/calendar.css">   
<!--common-head-css -->
	<link rel="stylesheet" href="assets/css/jquery.timepicker.css">
	<link rel="stylesheet" href="assets/css/datepicker.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

		<body class="hold-transition  sidebar-mini">
			<div class="wrapper">
				<nav class="navbar navbar-default nav-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xs-4 col-sm-12 logo-col">
                <div class="logo animated fadeInLeft">
                    <h1><a   style="padding:15px;background-color:#a01f62;color:white; font-family: Georgia Header;border-radius:50px 0px 50px 0px" href="index.php">MedEase</a></h1>
                </div>
            </div>
            <div class="col-lg-9 col-xs-8 col-sm-12 header-sgnin">
                <div class="signin">
                    <ul>
					    	<li ><a href = "presignup.php"><img src="assets/images/home/1.png" />Signup</a></li>
							<li onclick="mysigninFunction()" data-toggle="modal" class="log-index" data-target="#myModal">
							<img src="assets/images/home/2.png" />Signin</li>
					</ul>
                </div>
                <div class="clearfix hidden-xs"></div>
                <div class="navbar-header navbar-header-resp">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav nav-head animated fadeInDown">
                        <li class="active m-1"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                        <li><a href = "aboutus.php">About Us</a></li>
						<li><a href = "terms.php">Terms </a></li>
                        <li><a href = "contact.php">Contact </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <!-- Modal -->
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
							<form  action="fgpass.php" method="post" data-parsley-validate="" class="validate">
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
										<input type="text" name="phone" id="fphone" class="form-control"  placeholder="Phone" >
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="password" name="npass" id="pass" class="form-control"  placeholder="New Password" >
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
											<h4><button type="submit" name="fgpass" class="log-in-a">Submit</button></h4>
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
</div>
