<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blood Bank System!</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   <div class="col-md-10">
 <?php include_once '../includes/dbconnect.php'; ?>
   <h2 > <center>Registration For admin-</center></h2><hr>
   
    <?php
      
      if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=md5($_POST['pass']);
		

        if (empty($email)||empty($password) || empty($name)  ) { ?>
          <div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
              <center> All fields are required!</center>
                </div>            
      <?php  }
       /* if (!empty($array)) {
          foreach ($array as $value) {
              echo $value;
          }
        }*/
		
		else{
          $insert=mysqli_query($con,"INSERT INTO admin VALUES('','$name','$email','$password')");
          if ($insert) {?>
           <div class=" alert btn-warning alert-error ">
            <a href="adlogin.php?" class="close " data-dismiss="alert">&times;</a>
           <center> You have successfully registered!</center>
           <!--    <a href="login.php" >>> Login!</a>-->
                </div>    
        <?php  }else{
           echo mysql_error();  
          }


        }
      }
      ?>
	  
	  <form  action="admin_registration.php" class="form-horizontal" class="Jumbotron" method="POST">
				<div class="form-group form-group-sm">
                <label class="col-sm-4 control-label" for="formGroupInputSmall"> Name </label>
                <div class="col-sm-4">
                  <input class="form-control" type="text" id="formGroupInputSmall" placeholder=" Name" name="name">
                </div>
              </div>
               

             <div class="form-group form-group-sm">
                <label class="col-sm-4 control-label" for="formGroupInputSmall">Email </label>
                <div class="col-sm-4">
                  <input class="form-control" type="email" id="formGroupInputSmall" placeholder="Email" name="email">
                </div>
              </div>
                 <div class="form-group form-group-sm">
                <label class="col-sm-4 control-label" for="formGroupInputSmall">Password </label>
                <div class="col-sm-4">
                  <input class="form-control" type="password" id="formGroupInputSmall" placeholder="Password" name="pass"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
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
   </div>
   
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   <!-- <script src="offcanvas.js"></script>-->
  </body>
</html>