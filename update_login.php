<?php include_once 'includes/header.php';
      include_once 'includes/dbconnect.php'; ?>

              <h2 ><center>Please give email and password -</center></h2><hr>
                  <?php
      
    /*  if (isset($_POST['submit'])) {
        $array=array();
        $email=$_POST['email'];
        $password=$_POST['pass'];

        if (empty($email)||empty($password) ) {
          $array[]=' <div class=" alert btn-warning alert-error ">
                <a href="" class="close " data-dismiss="alert">&times;</a>
              <center> Please enter  Email and Password!</center>
                </div>';              
        }
        if (!empty($array)) {
          foreach ($array as $value) {
              echo $value;
          }
        }else{
    $query=mysql_query("SELECT * FROM registration ");
    while ($row=mysql_fetch_assoc($query)) {
      $dbemail=$row['email'];
      $dbpass=$row['password'];
      $member_id=$row['id'];
      $_SESSION['member_id']=$member_id;
      $_SESSION['dbemail']=$dbemail;
      $_SESSION['dbpass']=$dbpass;
     // var_dump($_SESSION['dbpass']);
      if ($dbemail==$email && $dbpass==$password) { ?>
		<div class=" alert btn-warning alert-error ">
                <a href="update.php? id=<?php echo $member_id; ?>"class="close " data-dismiss="alert">&times; </a>
               <center>You have successfully Loged in !</center>
               <!--<a href="login.php" >>> Login!</a>-->
                </div> 
	<?php }
    }

        }
            }*/ 
    if (isset($_POST['submit']))

   {
      	$email=$_POST['email'];
      	$password=sha1 ($_POST['pass']);

               if (empty($email) AND empty($password) ) 

                { ?>
                   <div class=" alert btn-warning alert-error ">
                    <a href="" class="close " data-dismiss="alert">&times;</a>
                    <center>Please enter  Email and Password!</center>
                     </div> <?php             
                }
        			
			       else

              {
            //echo "soryy";
            		$sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
      
            							
            		  $query=mysqli_query( $con,$sql);
            		
            		  if( mysqli_num_rows($query)>0)
            		     {

            			     $row = mysqli_fetch_array($query);
            			     //session_start();
            			      $_SESSION['user'] = $row;
            			       $member_id=$row['id'];?>
            			       <div class=" alert btn-warning alert-error ">
                            <a href="update.php? id=<?php echo $member_id; ?>"class="close " data-dismiss="alert">&times; </a>
                           <center>You have successfully Loged in !</center>
                           <!--<a href="login.php" >>> Login!</a>-->
                            </div> 
            	           <?php

            			     header('location:update.php?id='.$row['id']);
            		      }

            		       else
            		        {?>

            			        <div class=" alert btn-warning alert-error ">
                            <a href="" class="close " data-dismiss="alert">&times;</a>
                           <center>Wrong  Email and Password!</center>
                            </div> 
            		        <?php 
                        }

		          }
		     
	  }
      ?>
        
              <form  action="update_login.php" class="form-horizontal" class="Jumbotron" method="POST">
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
         
<?php include_once 'includes/footer.php'; ?>

