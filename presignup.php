<?php
include("header.php");
include("find.php");
?>
<body onload="initialize()"><!--patient-join-->
<div class="container">
    <div class="row">
        <div class="join-main">
            <div class="col-lg-6">
                <div class="join">
                    <img src="assets/images/login/patient.png"  class="img-responsive" alt=""/>
                    <div class="clearfix"></div>
                    <h3>I'm a new Patient</h3>
                    <h4>Find a doctor and book an appointment online for free!     <br>online for free! </h4>
                    <h5><a href = "patient.php">Join now</a></h5>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="join-1">
                    <img src="assets/images/login/doctor.png"   class="img-responsive" alt=""/>
                    <h3>I'm a Doctor</h3>
                    <h4>Quicker way for your patient to schedule an appointment. <br>online for free! </h4>
                    <h5><a href = "doctor.php">Join now</a></h5>
                </div>
            </div>
        </div>

    </div>
</div>

<!--patient-join-->
<!--footer-->
<?php include("footer.php"); ?>