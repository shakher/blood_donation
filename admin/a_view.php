<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Blood Bank System!</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
 <?php include_once '../includes/dbconnect.php'; ?>
 <div class="col-md-10">
   
    
	<?php if (isset($_GET['id'])) {
	$id=$_GET['id'];

$query=mysqli_query($con,"SELECT * FROM acceptor WHERE Accetptor_id='$id' ");
while ($row=mysqli_fetch_assoc($query)) {?>
	<h2 ><center>Acceptor  Details</center></h2>
	<table class="table table-hover">
<tr >
	<th> Acceptor Name</th>
	<td> <?php echo $row['acceptor_name']; ?> </td>
</tr>
<tr>
	<th>Father's Name </th>

	<td> <?php echo $row['fname']; ?> </td>
</tr>
<tr>
	<th> Mother's Name </th>
	<td> <?php echo $row['mname']; ?> </td>

</tr>
<tr>
	<th> Address </th>
	<td> <?php echo $row['address']; ?> </td>

	</tr>
	<tr>
	<th>Email</th>
	<td> <?php echo $row['acceptor_mail']; ?> </td>

	</tr>
	<tr>
	<th>Phone Number</th>
	<td> <?php echo $row['phone_no']; ?> </td>

	</tr>
	<tr>
	<th>Blood Group</th>
	<td> <?php echo $row['bgroup']; ?> </td>

	</tr>
	<tr>
	<th>Amount(bags)</th>
	<td> <?php echo $row['amount']; ?> </td>

	</tr>
	<tr>
	<th>Gender</th>
	<td> <?php echo $row['gender']; ?></td>

	</tr><tr>
	<th>Age	</th>
	<td> <?php echo $row['age']; ?> </td>

	</tr>
	
	<tr>
	<th>Date</th>
	<td><?php echo $row['date']; ?></td>

	</tr>
<!-- </tr>
<tr> -->



</table><hr>
	<a href="a_details.php ?>" class="pull-right">Back<span class="glyphicon glyphicon-menu-right"></span></a>


	<?php
}
}?>
	<script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   <!-- <script src="offcanvas.js"></script>-->
  </body>
</html>