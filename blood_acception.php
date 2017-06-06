<?php include_once 'includes/header.php';include_once 'includes/dbconnect.php'; ?>
<h2 ><center> Please fill up the form to receive Blood:-</center></h2><hr>

		<?php
		if(isset($_SESSION['user']))	
		{
		if (isset($_POST['submit']))
		{
		$array=array();

    $name=$_POST['name'];
		$email=$_POST['email'];
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$blood=$_POST['blood'];
		$amount=$_POST['amount'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
		//$date=date('d-M-Y');
		$member_id=$_SESSION['user']['id'];
		
		if ( empty($name)|| empty($email) || empty($fname) || empty($mname)  ||  empty($blood)|| $amount<0 || empty($address)||empty($phone) || empty($gender) || empty($age) ) {?>
           <div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
               All fields are required!
                </div>         
     <?php    }
		
		
		else{
				$select=mysqli_query($con,"SELECT amount FROM blood WHERE bgroup='$blood'");
        $flag = false;
				 while ($row=mysqli_fetch_assoc($select)) {
          $flag = true;
				$available=$row['amount'];
				if ($available==0)
				{?>
					<div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
                <center> <?php echo $blood?>  &nbsp; blood  is not sufficient !</center>
                </div>  
					
			<?php	}
				
				else if($available<$amount) 
				{?>

				<div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
				<center> <?php echo $blood?>&nbsp;blood is less than &nbsp;<?php echo $amount?>&nbsp;bags </center>
                </div>  
				
				<?php }
				
				else{
				$insert=mysqli_query($con,"INSERT INTO acceptor (acceptor_name, email, fname, mname, bgroup,amount, address, Phone_no,  gender, age, Mem_id) VALUES('$name','$email','$fname','$mname','$blood','$amount','$address','$phone','$gender','$age','$member_id')");
				$update=mysqli_query($con,"UPDATE blood SET amount=amount-$amount WHERE bgroup='$blood'");

				if (mysqli_affected_rows($con)==1) {?>
				<div class=" alert btn-warning alert-error ">
                <a href=" " class="close " data-dismiss="alert">&times;</a>

				<center>You have successfully Accepted! </center>
				<!--<a href="login2.php" >>> Login!</a>-->
                </div> 
				 <?php  }

         else{
           echo mysqli_error($con);  
          }

			}

        }
     if(!$flag){
      printf('<div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
                <center>  %s &nbsp; blood  is not available !</center>
                </div> ', $blood);
     }

		}
				
	}
		}
		else{
			
			 header("location: login2.php");
		}


?>
		
			  <form  action="blood_acception.php" class="form-horizontal" class="Jumbotron" method="POST">
               
			   <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Acceptor Name </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Acceptor Name" name="name">
                </div>
              </div>
			    
				<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Email </label>
                <div class="col-sm-6">
                  <input class="form-control" type="email" id="formGroupInputSmall" placeholder="Email" name="email">
                </div>
              </div>
			   
			 
			 <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Father's Name </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Father's Name" name="fname">
                </div>
              </div>
				
				<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Mother's Name </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Mother's Name" name="mname">
                </div>
              </div>
			  
               <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Blood Group</label>
                <div class="col-sm-6">
                   <select class="form-control input-sm" name="blood">
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
			  
			  <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Amount(bags) </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Amount" name="amount">
                </div>
              </div>

              <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Full Addrsss </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Addrsss" name="address">
                </div>
              </div>
                
                
              <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Phone Number </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Phone Number" name="phone">
                </div>
              </div>
                 
                    <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Gender</label>
                <div class="col-sm-6">
                   <select class="form-control input-sm" name="gender">
                    <option value="">Select one</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>

                   </select>
                </div>
              </div>
          
               <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Age </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Age" name="age">
                </div>
              </div>

          &nbsp;
                   <div class="form-group form-group-sm">
                <label class="col-sm-5 control-label" for="formGroupInputSmall"></label>
                <div class="col-sm-2">
                  <input class="form-control btn btn-info pull-right" type="submit" placeholder="Submit!" name="submit" value="submit">
           
            
                </div>
              </div>
          
              

            </form>
			  <!--<a href="index.php" class="pull-right glyphicon glyphicon-menu-right"><i>Back!</i></a>-->	
             
			  <?php include_once 'includes/footer.php'; ?>