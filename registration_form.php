<?php include_once 'includes/header.php';include_once 'includes/dbconnect.php'; ?>
				<h2 > <center>User Registration-</center></h2><hr>
				
				 <?php
      
      if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=sha1($_POST['pass']);
		$blood=$_POST['blood'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
		$date=date('d-M-Y');

        if (empty($email)||empty($password) || empty($name) ||  empty($phone) || empty($blood) || empty($gender) || empty($age) ) { ?>
          <div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
               <center>All fields are required!</center>
                </div>            
      <?php  }
     
		else if($age<18)
		{?>
			<div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
               <center>Age must be  18 or greater than !</center>
                </div>   
		<?php }
		else{
          $insert=mysqli_query($con,"INSERT INTO registration (name,email,password,address,Phone_no,bgroup,gender,age) VALUES('$name','$email','$password','$address','$phone','$blood','$gender','$age')");
          if ($insert) {?>
           <div class=" alert btn-warning alert-error ">
            <a href="login.php?" class="close " data-dismiss="alert">&times;</a>
          <center> You have successfully registered!</center>
            <!-- <a href="login.php" >>> Login!</a>-->
                </div>    
        <?php  }


        }
      }
      ?>
				
				<form  action="registration_form.php" class="form-horizontal" class="Jumbotron" method="POST">
				<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall"> Name </label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder=" Name" name="name">
                </div>
              </div>
               

             <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Email </label>
                <div class="col-sm-6">
                  <input class="form-control" type="email" id="formGroupInputSmall" placeholder="Email" name="email">
                </div>
              </div>
                 <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Password </label>
                <div class="col-sm-6">
                  <input class="form-control" type="password" id="formGroupInputSmall" placeholder="Password" name="pass"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
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
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Age must be  18 or greater than" name="age"title="Age must be  18 or greater than">
                </div>
              </div>
              

          &nbsp;
                   <div class="form-group form-group-sm">
                <label class="col-sm-5 control-label" for="formGroupInputSmall"></label>
                <div class="col-sm-2">
                  <input class="form-control btn btn-info pull-right" type="submit" placeholder="Submit!" name="submit" value="Registration">
           
            
                </div>
              </div>
          
              </form>
			   <a href="login.php" class="pull-right glyphicon glyphicon-menu-right"><i>Back!</i></a>


<?php include_once 'includes/footer.php'; ?>
