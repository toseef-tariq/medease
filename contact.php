<?php
include("header.php");
include("find.php");
?>
<body onload="initialize()">	<!--contact-main-->
<div class="container-fluid contact-banner">
<div class="container">
    <div class="col-lg-12">
        <div class="contact-form">
            <div class="col-lg-offset-6 col-lg-6 contact-form-main">
                <div class="col-lg-12">
                    <div class="getting-back">
                        <img src="assets/images/contact/1.png" />
                        <h3>Getting back to<br>
                            <span>Us</span></h3>
                        <form class="animated fadeIn">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="name" placeholder="Email">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="name" placeholder="Phone">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label for="usr" class="usr-commet">Comments</label>
                        <textarea class="form-control text-form" style="    border: 1px solid; min-height: 150px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary btn-cnt" style="border:1px solid white;">Send<i class="fa fa-angle-double-right"></i> </button>
                                </div>
									
                            </div>
                            <div class="clearfix"></div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!--contact-main-->
<!--footer-->
  <?php include("footer.php"); ?>