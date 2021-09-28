<?php
$alert=null;
include 'menu.php';
$a=mysqli_connect('localhost','root','','stu_fee_mgmt');
if(isset($_POST['submit']))
{
	$b=mysqli_query($a,"insert into account(`name`,`email`,`contact`,`address`,`password`) values('".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['address']."','".$_POST['password']."')");
	if($b)
	{
		$alert="Inserted";
	}
	else
	{
		$alert="Not Inserted";
	}
}

?>
<head>
	<link rel="stylesheet"href="../bootstrap.min.css" type="text/css">
</head>
<body style="background-image:url('yellow.jpg'); background-size:cover;">
</body>	
<center><h1>Add Accountant Form</h1><h5 style="color:red;"><?php echo $alert;?></h5></center>
<br><center>
<br>

<form action="" method="post">
	<center>
	<div class="form-group">
	<div class="row">
		<div class="col-3">Name</div>
		<div class="col-9"><input class="form-control"type="text" name="name" placeholder="enter name" required></div>
	</div>
	<br><div class="row">
		<div class="col-3">E-mail</div>
		<div class="col-9"><input class="form-control"type="email" name="email" placeholder="enter e-mail" required></div>
	</div>
	
	
	<br><div class="row">
		<div class="col-3">Contact</div>
		<div class="col-9"><input class="form-control"type="number" name="contact" placeholder="enter contact no" required></div>
	</div>
	<br><div class="row">
		<div class="col-3">Address</div>
		<div class="col-9"><textarea class="form-control"type="text" name="address" placeholder="enter address" required></textarea></div>
	</div>
	<br><div class="row">
		<div class="col-3">Password</div>
		<div class="col-9"><input class="form-control"type="password" name="password" placeholder="enter password" required></div>
	</div>
	<br><center><input class="btn btn-primary" style="width:50%;"type="submit" name="submit" value="Add Accountant"></center>
	</div>
	</center>
	
</form>

</center>


