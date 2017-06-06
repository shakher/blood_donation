<?php
include_once '../includes/dbconnect.php'; 
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
	var_dump($id);
		$delete=mysqli_query($con,"DELETE FROM acceptor WHERE accetption_id='$id'");
		if ($delete) {
			header("location:a_details.php");
		}
		else{
			echo mysql_error();
		}

	}
?>