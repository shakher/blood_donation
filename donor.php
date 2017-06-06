<?php 
include_once 'includes/header.php';
include_once 'includes/dbconnect.php'; 
?>
<h2><center>Lists of Donor:</center></h2><hr>
<table class="table table-bordered table-hover">
<tr class="success">
	<th><center>No: </center></th>
	<th><center> Donor Name</center></th>
	<th><center> Blood Group </center></th>
	<th><center> Donate Date </center></th>

<!--	<th><center> view Details</center></th>-->
</tr>
<?php

$query=mysqli_query($con, "SELECT * FROM donor ");
$num=1;

while ($row=mysqli_fetch_assoc($query)) {?>
	 <td><center><?php echo  $num++; ?></center></td>
	<td><center> <?php echo $row['Donor_name']; ?></center> </td>
	<td><center> <?php echo $row['bgroup']; ?></center></td>
	<td><center><?php echo $row['date']; ?></center></td>
	
	<!--<a href="donor_view.php?id=<?php echo $row['donor_id']; ?>">view</a></td>-->
</tr>	<?php
}
?>
</table>




<?php include_once 'includes/footer.php'; ?>