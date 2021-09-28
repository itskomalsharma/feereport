<?php
include 'menu.php';
	$a=mysqli_connect('localhost','root','','stu_fee_mgmt');
	if(isset($_POST['update']))
{
	mysqli_query($a,"update account set NAME='".$_POST['name']."',Email='".$_POST['email']."',contact='".$_POST['contact']."',address='".$_POST['address']."',Password='".$_POST['password']."' where ID=".$_GET['id']."");
}
?>
<head>
	<link rel="stylesheet"href="../bootstrap.min.css" type="text/css">
</head>
<body style="background-image:url('yellow.jpg'); background-size:cover;">
</body>	
<center>
<br><br><br>
<div class="card">
<form action="" method="post">
	<center>
	<div class="form-group">
		<br><br><input style="width:60%;"class="form-control"type="text" name="name" placeholder="enter name">
		<br><input style="width:60%;"class="form-control"type="email" name="email" placeholder="enter e-mail">
		<br><input style="width:60%;"class="form-control"type="number" name="contact" placeholder="enter contact">
		<br><textarea style="width:60%;"class="form-control"type="text" name="address" placeholder="enter address"></textarea>
		<br><input style="width:60%;"class="form-control"type="password" name="password" placeholder="enter password"><br>
		<input class="btn btn-primary"style="width:60%;"type="submit" name="update" value="UPDATE">
	</div>
	</center>
	
</form>
</div>
</center>


