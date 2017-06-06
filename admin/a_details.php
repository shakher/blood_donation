<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Blood Bank System!</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	
	<script>
function show(id)
{
	if(confirm('Do you want to delete?'))
	{
		//alert(id+" is deleted .");
		window.location.replace("a_delete.php?id="+id);
	}
	else
	{
		alert("file not delete");
	}
	
}

</script>
  </head>
  <body>
 <?php include_once '../includes/dbconnect.php'; ?>
 <div class="col-md-10">
   <h2 ><center>Acceptors </center></h2><hr>
   
   
 <table class="table table-bordered table-hover">
<tr class="success">
	<th><center>No: </center></th>
	<th><center> Acceptor Name</center></th>
	<th><center> Blood Group </center></th>
	<th><center>  Date </center></th>
	<th><center> view Details</center></th>
	<th><center> Delete</center></th>
</tr>
<?php

$query=mysqli_query($con,"SELECT * FROM acceptor ");
$num=1;

while ($row=mysqli_fetch_assoc($query)) {?>
	 <td><center><?php echo  $num++; ?></center></td>
	<td><center> <?php echo $row['acceptor_name']; ?></center> </td>
	<td><center> <?php echo $row['bgroup']; ?></center></td>
	<td><center><?php echo $row['date']; ?></center></td>
	<td><a href="a_view.php?id=<?php echo $row['accetption_id']; ?>"><center>view</center></a></td>
	<td><a href="" onclick="show('<?php echo $row["accetption_id"]; ?>')">Delete</a></td>
</tr>	<?php
}
?>
</table>
<a href="blog.php ?>" class="pull-right">Back<span class="glyphicon glyphicon-menu-right"></span></a>
 </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   <!-- <script src="offcanvas.js"></script>-->
  </body>
</html>