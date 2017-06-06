
<?php
session_start();

 include_once 'includes/header.php';include_once 'includes/dbconnect.php'; ?>
		
<h2><center> Please fill up the form to donateBlood:-</center></h2><hr>

                  <?php
			//echo	   $_SESSION['member_id'];
      	if(isset($_SESSION['user']))	
		{
		if (isset($_POST['submit'])) {
        $array=array();
        $name=$_POST['name'];
		$email=$_POST['email'];
		//$password=$_POST['pass'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
		$blood=$_POST['blood'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $weight=$_POST['weight'];
         //$date=date('d-M-Y');
		$member_id=$_SESSION['user']['id'];

        if (empty($email) || empty($name) || empty($fname) || empty($mname) || empty($phone) || empty($blood) || empty($gender) || empty($age) || empty($weight) ) {?>
         <div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
             <center>  All fields are required!</center>
                </div>              
      <?php   }
	  
		else if($age<18)
		{?>
			<div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
               <center>Age must be greater than 18 !</center>
                </div>   
		<?php }
		
		else if( $weight<48)
		{?>
			<div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
               <center>weight must be greater than 48 !</center>
                </div>   
		<?php }
		else{
          $insert=mysqli_query($con, "INSERT INTO donor (Donor_name, email, fname, mname, bgroup, address, Phone_no, gender, age, weight, Mem_id) VALUES ('$name','$email','$fname','$mname','$blood','$address','$phone','$gender', '$age', '$weight', '$member_id')" );
		   
         echo $insert;

          if ($insert) { $update=mysqli_query($con,"UPDATE blood SET amount=amount+1 WHERE bgroup='$blood'");
          ?>
				 <div class=" alert btn-warning alert-error ">
                <a href=" " class="close " data-dismiss="alert">&times;</a>
               <center>You have successfully donated!</center>
              <!-- <a href="donate.php" >>> Again donate!</a></center>-->
                </div>   
        <?php  }
          }	
        
		}

    
  }
		
		else{
			 header("location: login.php");
			
		}
		
?>	
    
        
              <form  action="blood_donation.php" class="form-horizontal" class="Jumbotron" method="POST">
              <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Donor Name </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Donor Name" name="name">
                </div>
              </div>
                <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Father's Name </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Father's Name" name="fname" >
                </div>
              </div>

              <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Mother's Name </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Mother's Name" name="mname">
                </div>
              </div>

              <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Full Addrsss </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Addrsss" name="address">
                </div>
              </div>
                <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Email </label>
                <div class="col-sm-6">
                  <input class="form-control" type="email" id="formGroupInputSmall" placeholder="Email" name="email">
                </div>
              </div>
                 
              <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Phone Number </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Phone Number" name="phone">
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
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Age(Year) </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Age must be  18 or greater than " name="age">
                </div>
              </div>
                <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Weight(KG)</label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Weight at least 48 KG" name="weight">
                </div>
                </div>

                  
                   <div class="form-group form-group-sm">
                <label class="col-sm-5 control-label" for="formGroupInputSmall"></label>
                <div class="col-sm-2">
                  <input class="form-control btn btn-info pull-right" type="submit" placeholder="Submit!" name="submit" value="Submit">
           
            
                </div>
              </div>
          
              <!--<a href="index.php" class="pull-right glyphicon glyphicon-menu-right"><i>Back!</i></a>-->	
		
            </form>
		
<?php include_once 'includes/footer.php'; ?>
