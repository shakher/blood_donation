<?php include_once 'includes/header.php';include_once 'includes/dbconnect.php'; ?>
              <h2 ><h2> <center>Update Donor information-</center> </h2><hr>

			  
			

<form  action="update.php" class="form-horizontal" class="Jumbotron" method="POST">
				<div class="form-group form-group-sm">
				<label class="col-sm-3 control-label" for="formGroupInputSmall"> Id</label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall" name="id" value="  ">
                </div>
				</div>
				<div class="form-group form-group-sm">
				<label class="col-sm-3 control-label" for="formGroupInputSmall">Name </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall" name="name"  value="">
                </div>
				</div>
				<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Email </label>
                <div class="col-sm-6">
                <input class="form-control" type="email" id="formGroupInputSmall"  name="email" value="">
                </div>
				</div>
			
				<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Password </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall"  name="pass"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"value="">
                </div>
				</div>
				
				<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Full Addrsss </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall"  name="address"value="">
                </div>
				</div>
				<div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Phone Number </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall" name="phone" value="">
                </div>
				</div>
                 
				 
				 <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Blood group</label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall"  name="blood"value="">
                </div>
				</div>    
				
				 
			  
			 
                <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="formGroupInputSmall">Gender </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="formGroupInputSmall"  name="gender"value="">
                </div>
				</div>    
				
          
					<div class="form-group form-group-sm">
					<label class="col-sm-3 control-label" for="formGroupInputSmall">Age(Year) </label>
					<div class="col-sm-6">
					<input class="form-control" type="text" id="formGroupInputSmall"  name="age" value="">
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
		<a href="index.php" class="pull-right glyphicon glyphicon-menu-right"><i>Back!</i></a>

			  
<?php include_once 'includes/footer.php'; ?>		  