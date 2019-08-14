<?php
 session_start();
if(!isset($_SESSION['user'])){
header("location:../index.php");
}
include("header.php");
$conn = new mysqli("localhost", "root", "", "medease");
if(isset($_POST['SubmitButton'])){ 	
		$uid=$_SESSION['user'];
		$topic=$_POST['topic'];
		$discussion=$_POST['discussion'];
		$sql ="INSERT into forum (uid, topic, discussion) VALUES ('$uid', '$topic', '$discussion')";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
		echo '<script>window.location.href="forum.php";</script>';
		}  
?>
                <div class="row">
                
                </div>
				<hr>
                 <!-- /. ROW  -->
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default" style="padding:50px;background-color:transparent;">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" method="post" action="create.php">
                                        <div class="form-group">
                                             <input class="form-control" name="topic" required="" placeholder="What is the discussion about in one brief sentence?" />
                                        </div>
                                        
                                        <div class="form-group">
                                        </div>
                                        
                                        <div class="form-group">
                                            <textarea class="form-control" style="resize: none;" name="discussion" rows="3" required="" placeholder="What is the discussion?"></textarea>
                                        </div>
                                     
                                        <button type="submit" class="btn" name="SubmitButton" style="background-color:#a01f62;color:white;">Create</button>
									</form>
                                   
                                    <br />
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