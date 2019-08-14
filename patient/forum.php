<?php
 session_start();
if(!isset($_SESSION['user'])){
header("location:../index.php");
}
include("header.php");
$conn = new mysqli("localhost", "root", "", "medease");
$query = "SELECT * FROM forum"; 
$result = mysqli_query($conn,$query);
 
?>

                
                 <!-- /. ROW  -->
               <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default" style="padding:20px;background-color:transparent;">
					<h3>Create a post on Forum</h3>
                <p>You can easily get involved with us. Reply on other forum topics or create your own by click on the below button!</p>
                <a href="create.php" style="background-color:#a01f62;color:white;" class="btn">Create</a>
					</div>
                </div>
            </div>
                 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th></th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
										<?php
					while($row = mysqli_fetch_array($result)){ 
								echo "<tr><td> <div class='row'>
                <div class='col-md-12'>
                    <div class='panel panel-default' style='padding:20px;background-color:transparent;'>
					<a href='comment.php?q=". $row['id'] ."'><h4 style='color:#a01f62;'>Topic: " . $row['topic'] . "</h4></a>
                <h5>Discussion: " . $row['discussion'] . "</h5>
				<h6>By: " . $row['uid'] . "</h6>
					</div>
                </div>
            </div></td></tr>";
							
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
    </div>
	
           <?php
include("footer.php");
?>