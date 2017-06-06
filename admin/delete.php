<?php
include_once '../includes/dbconnect.php'; 
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
	var_dump($id);
		$delete=mysql_query("DELETE FROM blog WHERE id='$id'");
		if ($delete) {
			
          header("location:blog.php");
		}
		else{
			echo mysql_error();
		}

	}
?>