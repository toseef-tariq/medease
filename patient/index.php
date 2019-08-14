<?php
 session_start();
if(!isset($_SESSION['user'])){
header("location:../index.php");
}
$id=$_SESSION['user'];
include("header.php");
$conn = new mysqli("localhost", "root", "", "medease");
$query = "SELECT * FROM bookings Where user='$id'"; 
$result = mysqli_query($conn,$query);	


if(isset($_POST['delete_id'])){ 
		$id = $_POST['delete_id'];
		$query = "delete from bookings where ID = $id";		
		mysqli_query($conn, $query);
		 echo '<script>window.location.href="index.php";</script>';
		}

?>
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color:black">New Booking</h2>  
						<br>					 
                        <a   href="new_booking.php" class="btn " style="background-color:#a01f62;color:white;"><i class="fa fa-plus"></i> New Booking</a>
						<br><br><br>
                    </div>
                </div>   
				
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"  style="background-color:#a01f62;color:white;">
                             Booking List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>BID</th>
                                            <th>Doctor ID</th>
                                            <th>Patient Name</th>
                                            <th>Contact</th>
                                            <th>Problem</th>
											<th>User ID</th>
											<th>Actions</th>
                                        </tr>
                                    </thead>
									<tfoot>
                                        <tr>
                                             <th>BID</th>
                                            <th>Doctor ID</th>
                                            <th>Patient Name</th>
                                            <th>Contact</th>
                                            <th>Problem</th>
											<th>User ID</th>
											<th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
										<?php
					while($row = mysqli_fetch_array($result)){ 
							echo "<tr><td >" . $row['id'] . "</td><td >" . $row['doctor'] . "</td>
							<td>" . $row['patient'] . "</td><td>" . $row['contact'] . "</td><td >" . $row['problem'] . "</td>
							<td >" . $row['user'] . "</td>
							<td><div class='field-actions'><div class='btn-group'>
							<form action='index.php' method='post'>
							  <button   name='delete_id' style='background-color:#a01f62;color:white;'  value='" . $row['id'] . "'   type='submit'>Delete</button>
							</from></div></div></td></tr>"; 
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
      
               
    </div>
            <?php
include("footer.php");
?>