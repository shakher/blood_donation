<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../images/logo.jpg">
	<title>Blood Bank System!</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  
 <?php include_once '../includes/dbconnect.php'; 


  ?>
  <?php
include_once 'header.php';
  ?>


     <div class="col-md-10">
   <h2 ><center>Admin login Page</center></h2>
   <h3>This is secured page...only Admin can login:</h3><hr>

   <?php  
		
		if (isset($_POST['submit']))
		{
			$email=$_POST['email'];
			$password=$_POST['pass'];
			 if (empty($email) AND empty($password) ) { ?>
          <div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
               <center>Please enter  Email and Password!</center>
                </div> <?php             
					}
			
			else{
			$sql = sprintf("SELECT * FROM admin WHERE email='%s' AND password='%s'", 
				$_POST['email'], md5($_POST['pass'])
							);
							
		$query=mysqli_query( $con,$sql);
		
		if( mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_array($query);
			session_start();
			$_SESSION['user'] = $row;

			header('location:blog.php');
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
   
   
   
   
   <form  action="adlogin.php" class="form-horizontal" class="Jumbotron" method="POST">
              <div class="form-group form-group-sm">
                <label class="col-sm-4 control-label" for="formGroupInputSmall"> Email </label>
                <div class="col-sm-4">
                  <input class="form-control" type="email" id="formGroupInputSmall" placeholder=" Email" name="email">
                </div>
              </div>
			  <div class="form-group form-group-sm">
                <label class="col-sm-4 control-label" for="formGroupInputSmall"> Password </label>
                <div class="col-sm-4">
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
			  <a href="admin_registration.php" class="pull-right glyphicon glyphicon-menu-right"><i>Registration!</i></a>&nbsp;
			   <a href="../index.php">Back</a><hr>&nbsp;
			   <footer>
				<center><p>রক্ত দান পদ্ধতি &copy; Copyright: 2015</p></center>
				</footer></div>
   <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   <!-- <script src="offcanvas.js"></script>-->
  </body>
 
</html>
