<?php
include 'accountantmenu.php';
$a=mysqli_connect('localhost','root','','stu_fee_mgmt');
if(isset($_POST['submit']))
{
	$b=mysqli_query($a,"insert into addstudent(`name`,`email`,`sex`,`course`,`fee`,`paid`,`due`,`contact`,`address`) values('".$_POST['name']."','".$_POST['email']."','".$_POST['sex']."','".$_POST['course']."','".$_POST['fee']."','".$_POST['paid']."','".$_POST['due']."','".$_POST['contact']."','".$_POST['address']."')");
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
<body bgcolor="red">
</body>	
<center>
<br>
	<h5 style="color:red;"><?php echo $alert;?></h5>
<div class=>
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
		<div class="col-3">Fee</div>
		<div class="col-9"><input class="form-control"type="number" name="fee"  required></div>
	</div>
	<br><div class="row">
		<div class="col-3">Paid</div>
		<div class="col-9"><input class="form-control"type="number" name="paid"  required></div>
	</div>
	<br><div class="row">
		<div class="col-3">Due</div>
		<div class="col-9"><input class="form-control"type="number" name="due" required></div>
	</div>
	<br><div class="row">
		<div class="col-3">Gender</div>
		<div class="col-2 col-offset-7"><input type="radio" name="sex" value="male" required>Male
		<input type="radio" name="sex" value="female" required>Female</div>
	</div>
	<br><div class="row">
		<div class="col-3">Course</div>
		<div class="col-9"><select class="form-control" name="course" required>
		<option>java</option>
		<option>.net</option>
		<option>php</option>
		<option>c</option>
		<option>c++</option>
		</select></div>
	</div>
	<br><div class="row">
		<div class="col-3">Contact</div>
		<div class="col-9"><input class="form-control"type="number" name="contact" placeholder="enter contact no." required></div>
	</div>
	<br><div class="row">
		<div class="col-3">Address</div>
		<div class="col-9"><textarea class="form-control"type="text" name="address" placeholder="enter address" required></textarea></div>
	</div>
	<br><center><input class="btn btn-primary"style="width:50%;"type="submit" name="submit" value="Add Student"></center>
	</div>
	</center>
	
</form>
</div>
</center>


