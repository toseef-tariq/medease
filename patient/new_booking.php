<?php
 session_start();
if(!isset($_SESSION['user'])){
header("location:../index.php");
}
include("header.php");
$conn = new mysqli("localhost", "root", "", "medease");
$query = "SELECT * FROM doctors"; 
$result = mysqli_query($conn,$query);	

if(isset($_POST['btnbook'])){
$name = $_POST['pname'];
$email = $_SESSION['user'];
$phone = $_POST['phone'];
$problem = $_POST['problem'];
$doctor = $_POST['doctor'];	
$sql = "INSERT INTO bookings (doctor, patient, contact, problem, user) VALUES ('$doctor', '$name', '$phone', '$problem','$email')";
mysqli_query($conn, $sql);
echo '<script>window.location.href="index.php";</script>';
}

?>
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color:black">New Booking</h2>  
						
                    </div>
                </div>   
				
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"  style="background-color:#a01f62;color:white;">
                             Search Doctor
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Fees</th>
                                            <th>Address</th>
                                            <th>Contact</th>
											<th>Special</th>
											<th>Time</th>
											<th>City</th>
											<th>Sex</th>
											<th>Actions</th>
                                        </tr>
                                    </thead>
									<tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Fees</th>
                                            <th>Address</th>
                                            <th>Contact</th>
											<th>Special</th>
											<th>Time</th>
											<th>City</th>
											<th>Sex</th>
											<th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
									<?php
					while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
							echo "<tr><td >" . $row['id'] . "</td><td >" . $row['name'] . "</td>
							<td>" . $row['fees'] . "</td><td>" . $row['address'] . "</td><td >" . $row['contact'] . "</td>
							<td >" . $row['special'] . "</td><td >" . $row['time'] . "</td><td >" . $row['city'] . "</td><td >" . $row['sex'] . "</td>
							<td><div class='field-actions'><div class='btn-group'>
							  <button style='background-color:#a01f62;color:white;'  value='" . $row['id'] . "' onclick='f1(this)'  			type='button' data-toggle='modal' data-target='#myModal'>Book</button>
							</div></div></td></tr>"; 
						}
				?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
      



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background-color:#a01f62;color:white;">
          <button type="button"  style="color:white;" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enter Details for Booking</h4>
        </div>
        <div class="modal-body">
           <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="post" action="new_booking.php">
                                        <div class="form-group">
                                            <label>Patient Name</label>
                                             <input class="form-control" name="pname" placeholder="PLease Enter Keyword" />
                                        </div>
                                        <div class="form-group">
                                            <label>Problem</label>
                                            <input class="form-control" name="problem" placeholder="PLease Enter Keyword" />
                                        </div>
                                        <div class="form-group">
                                        </div>
										<button type="submit" class="btn " name="btnbook" style="background-color:#a01f62;color:white;">Enter</button>
										<br />
												</div>
                                
									<div class="col-md-6">
                                   
                                        <fieldset >
                                            <div class="form-group">
                                                <label for="disabledSelect">Contact</label>
                                                <input class="form-control" name="phone"  type="text" placeholder="PLease Enter Keyword" />
                                            </div>
											
                                           <div class="form-group">
                                                <label for="disabledSelect">User ID</label>
												<?php												 
												 $user=$_SESSION['user'];
                                                 echo  "<input class='form-control'  name='uid' type='text' Disabled value=' ".$user . " ; ' />";
												?>
												<input type="text" value="" hidden name="doctor" id="doctor" />
                                            </div>
											
                                        </fieldset>
                                    </form>
                                
                                
                                </div>
                            </div>
                        </div>
        </div>
      </div>
    </div>
  </div>
<script>
function f1(btnval){  
     document.getElementById('doctor').value=btnval.value;
	
}

</script>

               
    </div>
            <?php
include("footer.php");
?>