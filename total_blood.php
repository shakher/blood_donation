<?php 
include_once 'includes/header.php';
include_once 'includes/dbconnect.php'; 
?>

<h2><center>Total Blood:<center></h2><hr>
<table class="table table-bordered table-hover">
<tr class="success">
	<th><center>No: </center></th>
	<th><center> Blood Group </center></th>
	<th><center> Amount </center></th>


</tr>



<?php
$query=mysqli_query($con,"SELECT bgroup,amount FROM `blood` ");
$num=1;
while ($row=mysqli_fetch_assoc($query)) {?>

	<td><center><?php echo  $num++;?></center> </td>
	<td> <center><?php echo $row['bgroup']; ?></center></td>
	<td><center><?php echo $row['amount']. ' &nbsp;bags'; ?></center></td>

	</tr>	<?php
}
?>
</table>
<a href="index.php" class="pull_right"><i >Back</i></a>

<?php include_once 'includes/footer.php'; ?>