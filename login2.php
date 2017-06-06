<?php include_once 'includes/header.php';include_once 'includes/dbconnect.php'; ?>
              <h2 ><center>You must first  login to donate or receive Blood:-</center></h2><hr>
			  <?php
			     if (isset($_POST['submit'])) {
		  $email=$_POST['email'];
			$password=$_POST['pass'];
			 if (empty($email) AND empty($password) ) { ?>
          <div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
               <center>Please enter  Email and Password!</center>
                </div> <?php             
					}
			
			else{
			$sql = sprintf("SELECT
							*
						FROM
							registration
						WHERE
							email='%s'
								AND
							password='%s'", $_POST['email'], sha1($_POST['pass'])
							);
							
		$query=mysqli_query( $con,$sql);
		
		if( mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_array($query);
			session_start();
			$_SESSION['user'] = $row;

			header('location:blood_acception.php');
		}
		else
		{?>
			<div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
               <center>Wrong  Email and Password!</center>
                </div> 
		<?php }
		}
		  
	  }
			  ?>
			  
			  <a href="update_login.php" class="pull-right glyphicon glyphicon-menu-right"><i>update!</i></a>
              <form  action="login2.php" class="form-horizontal" class="Jumbotron" method="POST">
              <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall"> Email </label>
                <div class="col-sm-6">
                  <input class="form-control" type="email" id="formGroupInputSmall" placeholder=" Email" name="email">
                </div>
              </div>
			  <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall"> Password </label>
                <div class="col-sm-6">
                  <input class="form-control" type="password" id="formGroupInputSmall" placeholder=" Password" name="pass">
                </div>
              </div>
			  
			  &nbsp;
			    <div class="form-group form-group-sm">
                <label class="col-sm-5 control-label" for="formGroupInputSmall"></label>
                <div class="col-sm-2">
                  <input class="form-control btn btn-info pull-right" type="submit" placeholder="Submit!" name="submit" value="login">
           
            
                </div>
              </div>
			  </form>
			    <a href="registration_form2.php" class="pull-right glyphicon glyphicon-menu-right"><i>Registration!</i></a>
				<?php include_once 'includes/footer.php'; ?>