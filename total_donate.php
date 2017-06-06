<?php 
include_once 'includes/header.php';
include_once 'includes/dbconnect.php'; 
?>
<h2><center>Total donates of Blood:</center></h2><hr>	
<table class="table table-bordered table-hover">
<tr class="success">
	<th><center>No: </center></th>
	<th><center> Blood Group </center></th>
	<th><center> Blood donate </center></th>

</tr>
<?php

$query=mysqli_query($con,"SELECT bgroup, count(bgroup) as count FROM `donor` group by bgroup ");


$num=1;

while ($row=mysqli_fetch_assoc($query)) {?>
	 <td><center><?php echo  $num++; ?></center></td>
	<td> <center><?php echo $row['bgroup']; ?></center></td>
	<td><center><?php echo $row['count']. '&nbsp;times'; ?></center></td>

</tr>	<?php
}
?>
</table>
<a href="donor.php" class="pull_right"><i >Back</i></a>
<!--<a href="donor_list.php" class="pull-right glyphicon glyphicon-menu-right"><i>donors!</i></a>-->


<?php include_once 'includes/footer.php'; ?>