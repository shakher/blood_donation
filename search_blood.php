<?php include_once 'includes/header.php';
include_once 'includes/dbconnect.php'; 
?>

              <h2 >What group you want to search?</h2><hr>
			  <?php
			  
			  if (isset($_POST['submit'])) {
				
				 $bgr=$_POST['bgr'];
				 
				
				 $select=mysqli_query($con,"SELECT amount as count FROM blood WHERE bgroup='$bgr'");
					
					
				while ($row=mysqli_fetch_assoc($select)) {
						
						$available=$row['count'];
						//echo $available;
					
					if ($available==0)
					{?>
						
				 <div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
              <center> <?php echo $bgr?>  &nbsp; blood is  not avaiable!</center>
                </div>  
						
					
					
					<?php }
					
					else
						{?>
					<div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
              <center> <?php echo $available?> &nbsp; bags is  avaiable!</center>
                </div>  
						<?php }
					
				
				}
					
			  }
                            
      ?>
			  
			  
<form  action="search_blood.php" class="form-horizontal" class="Jumbotron" method="POST">
	<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Blood Group</label>
                <div class="col-sm-5">
                   <select class="form-control input-sm" name="bgr">
                    <option value=" ">Select one</option>

                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>

                   </select>
                </div>
              </div>
			 &nbsp;
                   <div class="form-group form-group-sm">
                <label class="col-sm-4 control-label" for="formGroupInputSmall"></label>
                <div class="col-sm-2">
                  <input class="form-control btn btn-info pull-right" type="submit" placeholder="Submit!" name="submit" value="Search">
           
            
                </div>
              </div>
           
			   
	</form>		  
			  
<a href="index.php" class="pull-right glyphicon glyphicon-menu-right"><i>Back!</i></a>
<?php include_once 'includes/footer.php'; ?>