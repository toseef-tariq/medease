<?php
 session_start();
if(!isset($_SESSION['user'])){
header("location:../index.php");
}
include("header.php");
$conn = new mysqli("localhost", "root", "", "medease");
$id=$_GET['q'];
$uid=$_SESSION['user'];
$conn = new mysqli("localhost", "root", "", "medease");
$query = "SELECT * FROM forum  WHERE id='$id'"; 
$result = mysqli_query($conn,$query);
$qry = "SELECT * FROM comments WHERE fid='$id'"; 
$rslt = mysqli_query($conn,$qry);
  if(isset($_GET['SubmitButton'])){ 	
		$comment=$_GET['comment'];
		$sql ="INSERT into comments (fid, uid, comment) VALUES ('$id', '$uid', '$comment')";
		mysqli_query($conn, $sql);
		echo "<script>window.location.href='comment.php?q=". $id . " ';</script>";
		}  
?>

                
                 <!-- /. ROW  -->
               <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default" style="padding:10px;color:white;background-color:#a01f62;">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                  				<?php
					while($row = mysqli_fetch_array($result)){ 
								echo "<h4><b>Topic:</b> " . $row['topic'] . "</h4>
                <h5><b>Discussion:</b> " . $row['discussion'] . "</h5>
				<h6><b>By:<b> " . $row['uid'] . "</h6>
					";
							
						}
				?>
				
				
				</div>
                                    
                                
							</div>
						</div>
                     <!-- End Form Elements -->
                </div>
            </div>
               
    </div>
	 <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default" style="padding:10px;background-color:transparent;">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
								<h4>Comments</h4>
				           				<?php

					while($r = mysqli_fetch_array($rslt)){ 
								echo "<hr><h5> <b> " . $r['uid'] . "</b>:  " . $r['comment'] . " </h5><hr>
				
					";
							
						}
				?>
				
				
				
				<form role="form" method="GET" action="comment.php">
                                        
                                        
                                        <div class="form-group">
                                            <textarea class="form-control" style="resize: none;" name="comment" rows="3" required="" placeholder="Write Your Comment..!!"></textarea>
                                        </div>
                                        <input name="q" value="<?php echo $id; ?>" hidden type="text">
                                        <button type="submit" class="btn"  name="SubmitButton" style="background-color:#a01f62;color:white;">Comment</button>
									</form>
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