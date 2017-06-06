<?php
include_once '../includes/dbconnect.php'; 
	if (isset($_POST['register'])) {
		$id=$_POST['id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
	//	$date=date('d-M-Y');

		$insert_user=mysqli_query($con,"UPDATE blog SET heading='$firstname',message='$lastname',date=NOW() WHERE id='$id'");
		if ($insert_user) {
			header("location:blog.php");
		}
		else{
			echo mysql_error();
		}

	}
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$query=mysqli_query($con,"SELECT * FROM blog WHERE id='$id'");
	while ($rows=mysqli_fetch_assoc($query)) {?>
	<center>
	<h3>	Edit</h3><hr>
	<form action="blog_edit.php" method="post">
		<p>Heading: <br><input type="text" name="firstname" size="60" value="<?php echo $rows['heading']; ?>"></p>
		<p>Message : <br><textarea name="lastname" rows="10" cols="70"> <?php echo $rows['message'] ?></textarea>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
	 <input type="submit" value="Register!" name="register">
	</form>
</center>	
		<?php
	}
}