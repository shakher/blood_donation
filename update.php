<?php include_once 'includes/header.php';include_once 'includes/dbconnect.php'; ?>
<h2> <center>Update  information</center> </h2><hr>

	 <?php	
		if(isset($_SESSION['user']))
		{
		if (isset($_POST['submit'])) {
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=sha1($_POST['pass']);
		$blood=$_POST['blood'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
		$date=date('d-M-Y');
		$update=mysqli_query($con,"UPDATE registration SET name='$name', email='$email', password='$password', address='$address', phone_no='$phone', bgroup='$blood', gender='$gender', age='$age' WHERE id='$id'");
	//	$update=mysql_query("UPDATE donor SET donor_name='$name',password='$password',date=NOW() WHERE donor_id='$id'");
		
		if($update)
		{?>
			<div class=" alert btn-warning alert-error ">
                <a href="update_success.php? " class="close " data-dismiss="alert">&times; </a>
				<center> You have successfully updated!</center>
              <!--<a href="login.php" >>> Login!</a>-->
                </div>  
			
			
		<?php }
		else{
			echo mysqli_error();
		}
	  
  }
		}
		else{
			
			header('location:update_login.php');
		}
 if (isset($_GET['id']))
{
	$id=$_GET['id'];
	$query=mysqli_query($con,"SELECT * FROM registration WHERE id='$id' ");
	while ($row=mysqli_fetch_assoc($query)) {?>
	
	<form  action="update.php" class="form-horizontal" class="Jumbotron" method="POST">
				<div class="form-group form-group-sm">
				<label class="col-sm-3 control-label" for="formGroupInputSmall"> Id</label>
                <div class="col-sm-6">
                	
                <input class="form-control" type="text" id="formGroupInputSmall" name="id" value=" <?php echo $row['id']; ?> ">
                </div>
				</div>
				<div class="form-group form-group-sm">
				<label class="col-sm-3 control-label" for="formGroupInputSmall">Name </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall" name="name"  value="<?php echo $row['name'];?>">
                </div>
				</div>
				<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Email </label>
                <div class="col-sm-6">
                <input class="form-control" type="email" id="formGroupInputSmall"  name="email" value="<?php echo $row['email'];?>">
                </div>
				</div>
			
				<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Password </label>
                <div class="col-sm-6">
                <input class="form-control" type="password" id="formGroupInputSmall"  name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="">
                </div>
				</div>
				
				<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Full Addrsss </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall"  name="address"value="<?php echo $row['address'];?>">
                </div>
				</div>
				<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Phone Number </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall" name="phone" value="<?php echo $row['Phone_no'];?>">
                </div>
				</div>
                 
				 
				 <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Blood group</label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall"  name="blood"value="<?php echo $row['bgroup'];?>">
                </div>
				</div>    
				
				 
			  
			 
                <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Gender </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall"  name="gender"value="<?php echo $row['gender'];?>">
                </div>
				</div>    
				
          
					<div class="form-group form-group-sm">
					<label class="col-sm-3 control-label" for="formGroupInputSmall">Age(Year) </label>
					<div class="col-sm-6">
					<input class="form-control" type="text" id="formGroupInputSmall" placeholder="Age" name="age" value="<?php echo $row['age'];?>">
					</div>
					</div>
                
				
				&nbsp;
                 <div class="form-group form-group-sm">
                <label class="col-sm-5 control-label" for="formGroupInputSmall"></label>
                <div class="col-sm-2">
                  <input class="form-control btn btn-info pull-right" type="submit" placeholder="Submit!" name="submit" value="Update">
           
            
                </div>
              </div>
          
				
	</form>

 <?Php }
}


 include_once 'includes/footer.php'; ?>