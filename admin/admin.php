<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">
    <title>Blood Bank System!</title>
  <!--  <link href="css/style.css" rel="stylesheet">-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   <h2 ><center>You must first  login to donate or receive Blood:-</center></h2><hr>
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
   <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   <!-- <script src="offcanvas.js"></script>-->
  </body>
</html>
