<?php
 session_start();
if(!isset($_SESSION['user'])){
header("location:../index.php");
}
include("header.php");
$conn = new mysqli("localhost", "root", "", "medease");
if(isset($_POST['SubmitButton'])){ 		
		$sid=$_SESSION['user'];
		$contact=$_POST['phone'];
		$desc=$_POST['desc'];
		$time=$_POST['time'];
		$address=$_POST['address'];
		$fees=$_POST['fees'];
		$sql ="UPDATE doctors SET contact='$contact',fees='$fees',time='$time',description='$desc',address='$address' WHERE email='$sid'";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
		echo '<script>window.location.href="setting.php";</script>';
		}  
?>
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color:black">My Settings</h2>   
                   </div>
                </div>
				<hr>
                 <!-- /. ROW  -->
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default" style="padding:50px;background-color:transparent;">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="post" action="setting.php">
                                        <div class="form-group">
                                            <label>Contact</label>
                                             <input class="form-control" name="phone" required="" placeholder="PLease Enter Keyword" />
                                        </div>
                                        
                                        <div class="form-group">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" style="resize: none;" name="desc" rows="3" required=""></textarea>
                                        </div>
                                     
                                        <button type="submit" class="btn" name="SubmitButton" style="background-color:#a01f62;color:white;">Update</button>

                                   
                                    <br />


                                 
    </div>
                                
                                <div class="col-md-6">
                                   
                                        <fieldset >
                                            <div class="form-group">
                                                <label for="disabledSelect">Address</label>
                                                <input class="form-control" required=""  name="address" type="text" placeholder="Clinic Address" />
                                            </div>
											<div class="form-group">
                                                <label for="disabledSelect">Schedual </label>
                                                <select id="disabledSelect" class="form-control" name="time" required=""> 
                                                    <option disabled selected >Select Time</option>
													<option value="10 AM to 5 PM">10 AM to 5 PM</option>
													<option value="5 PM to 10 PM">5 PM to 10 PM</option>
													<option value="10 PM to 5AM">10 PM to 5AM</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Fee </label>
                                                <select id="disabledSelect" class="form-control" name="fees" required="">
                                                    <option disabled selected >Select Fee</option>
													<option value="Rs. 500">Rs. 500</option>
													<option value="Rs. 1000">Rs. 1000</option>
													<option value="Rs. 1500">Rs. 1500</option>
													<option value="Rs. 2000">Rs. 2000</option>
													
                                                </select>
                                            </div>
                                           
                                        </fieldset>
                                    </form>
                                
                                
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
               
    </div>
           <?php
include("footer.php");
?>