<?php
include 'accountantmenu.php';
	$a=mysqli_connect('localhost','root','','stu_fee_mgmt');
	
	mysqli_query($a,"delete from addstudent where ID=".$_GET['id']."");

?>
