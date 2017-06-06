<?php
include_once '../includes/dbconnect.php'; 
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
	var_dump($id);
		$delete=mysqli_query($con,"DELETE FROM registration WHERE id='$id'");
		if ($delete) {
			echo "sry";
			//header("location:members.php");
		}
		else{
			echo mysqli_error();
		}

	}
?>