<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">
    <title>Blood Bank System!</title>
  <!--  <link href="css/style.css" rel="stylesheet">-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">Blood Bank System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
        
             <li class="active "><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class=""><a href="../donor.php" >Donors</a></li>
            <li><a href=" ../acceptor.php">Acceptors</a></li>
            <li><a href="../blood_center.php">Blood center</a></li>
			     <li><a href="../search_blood.php">Blood Search</a></li>
            <li><a href="../login.php">Blood donate?</a></li>
            <li><a href="../login2.php">Blood accept?</a></li>
            
          </ul>
          <ul class="navbar-nav pull-right">
              <li class=" pull-right">
              <a href="#" class="dropdown-toggle navbar-nav" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in">  </span> User</a>
              <ul class="dropdown-menu">
              <?php
              if ( isset($_SESSION['user'])) {?>
                 <li><a href="../logout.php">Logout</a></li>
             
              <?php
                }else{?>

                <li><a href=".//login.php">Login</a></li>
                <!--<li role="separator" class="divider"></li>
                <li ><a href="registration.php">Registration</a></li>-->
               
                
                

              <?php
                }
              ?>
              </ul>
            </li>
          </ul>
		 
		  
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br><br><br>
    <div class="container ">
      <div class="row row-offcanvas row-offcanvas-right ">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs ">
           <!--  <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"></button> -->
          </p>
      
      