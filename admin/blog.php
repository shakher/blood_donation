
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>blog</title>
	<style>
	.main{width: 1200px;float: left;}
	.first{width: 300px;float: left; margin-left: 20px;border-right: 1px solid black;}
	.second{margin-left: 10px;float: right;width: 700px;}
	.first textarea, input[type=text]{
		width: 270px;
	}
	.third{margin-left:20px; margin-top:400px; font-size:20px;}
	.third ul{margin:0;padding:0;list-style:none;}
	.third ul li{padding: 5px;border bottom:1px solid #ddd;}
	.third ul li a:hover{color:#000px}
	</style>
<script>
function show(id)
{
	if(confirm('Do you want to delete?'))
	{
		//alert(id+" is deleted .");
		window.location.replace("delete.php?id="+id);
	}
	else
	{
		alert("file not delete");
	}
	
}

</script>
</head>
<body>
	
	<center><h1>Blog</h1></center><hr>
	
	<?php
include_once '../includes/dbconnect.php'; 
	session_start();
//	echo "<script>alert('".$_SESSION['user']['id']."')</script>";
			
	if(!isset($_SESSION['user']['id']))
	{
		header('location:adlogin.php');
	}
	
	if (isset($_POST['register'])) {
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];


		$insert_user=mysqli_query($con,"INSERT INTO blog VALUES('','$firstname','$lastname',NOW())");
		if ($insert_user) {
			header("location:blog.php");
		}
		else{
			echo mysqli_error($con);
		}

	}
	
	


	?>
<div class="main">
				<div class="first">
					<a href="logout.php"><h3>Logout</h3></a>
					<form action="blog.php" method="post">
						
						<p>Heading: <br><input type="text" name="firstname"  ></p>
						<p>Message : <br><textarea name="lastname" rows="5"></textarea></p><br>
					     
					  <input type="submit" value="Register!" name="register">
					</form>
				</div>


				<div class="second">
				<table  border="1" cellspacing="0" cellpadding="5">
					<tr >
						<td>No</td>
						<td>Heading</td>
						<td>Message</td>
						<td>Edit/Delete</td>
					</tr>
					
					<?php
						$query=mysqli_query($con,"SELECT * FROM blog");
					$count=1;
					while ($rows=mysqli_fetch_assoc($query)) {
					
						?><tr>

						<td><?php echo $count++; ?></td>
						<td><?php  echo $rows['heading']; ?></td>
						<td><?php  echo $rows['message']; ?></td>
						<td><a href="blog_edit.php?id=<?php echo $rows['id']; ?>">Edit</a>/<a href="" onclick="show('<?php echo $rows["id"]; ?>')">Delete</a></td>
				      <!-- <td><a href="" onclick="show('<?php echo $rows["id"]; ?>')">Delete</a></td>-->
						<?php
					}
					?>
					</tr>
				</table>
				</div>
			<div class="third">
			<ul>
					
					<li><a href="members.php">Members/Delete</a></li>
					<li><a href="d_details.php">Donor details/Delete</a></li>
					<li><a href=" a_details.php">Acceptors details/Delete </a></li>
					
				</ul>
			</div>

			<footer> <center><p>রক্ত দান পদ্ধতি &copy; Copyright: 2017</p></center></footer>

</div>		






</body>


</html>