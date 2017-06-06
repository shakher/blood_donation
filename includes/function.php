<?php
include_once 'dbconnect.php';
function total_donor()
{
include_once 'dbconnect.php';
	$query=mysql_query("SELECT * FROM donor");
	$num=mysql_num_rows($query);
	return $num;
}
echo total_donor();
?>