<?php
include 'menu.php';
	$a=mysqli_connect('localhost','root','','stu_fee_mgmt');
	
	mysqli_query($a,"delete from account where ID=".$_GET['id']."");

?>
