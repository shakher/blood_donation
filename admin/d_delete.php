<?php
include_once '../includes/dbconnect.php'; 
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
	var_dump($id);
		$delete=mysql_query("DELETE FROM donor WHERE donor_id='$id'");
		if ($delete) {
			header("location:d_details.php");
		}
		else{
			echo mysql_error();
		}

	}
?>