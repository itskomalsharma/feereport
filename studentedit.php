<?php
include 'accountantmenu.php';
	$a=mysqli_connect('localhost','root','','stu_fee_mgmt');
	if(isset($_POST['update']))
{
	mysqli_query($a,"update addstudent set NAME='".$_POST['name']."',Email='".$_POST['email']."',sex='".$_POST['sex']."',course='".$_POST['course']."',fee='".$_POST['fee']."',paid='".$_POST['paid']."',due='".$_POST['due']."',contact='".$_POST['contact']."',address='".$_POST['address']."' where ID=".$_GET['id']."");
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
	<div class="row">
		<div class="col-3">name:</div>
		<div class="col-9"><input class="form-control"type="text" name="name" placeholder="enter name" required></div>
	</div>
	<div class="row">
		<div class="col-3">email</div>
		<div class="col-9"><input class="form-control"type="email" name="email" placeholder="enter e-mail" required></div>
	</div>
	<div class="row">
		<div class="col-3">fee</div>
		<div class="col-9"><input class="form-control"type="number" name="fee" required></div>
	</div>
	<div class="row">
		<div class="col-3">paid</div>
		<div class="col-9"><input class="form-control"type="number" name="paid"  required></div>
	</div>
	<div class="row">
		<div class="col-3">due</div>
		<div class="col-9"><input class="form-control"type="number" name="due" required></div>
	</div>
	<div class="row">
		<div class="col-3">sex</div>
		<div class="col-9"><input type="radio" name="sex" value="male" required>male
		<input type="radio" name="sex" value="female" required>female</div>
	</div>
	<div class="row">
		<div class="col-3">course</div>
		<div class="col-9"><select class="form-control" name="course" required>
		<option>java</option>
		<option>.net</option>
		<option>php</option>
		<option>c</option>
		<option>c++</option>
		</select></div>
	</div>
	<div class="row">
		<div class="col-3">contact</div>
		<div class="col-9"><input class="form-control"type="number" name="contact" placeholder="enter contact no." required></div>
	</div>
	<div class="row">
		<div class="col-3">address</div>
		<div class="col-9"><textarea class="form-control"type="text" name="address" placeholder="enter address" required></textarea></div>
	</div>
	<br><center><input class="btn btn-primary"type="submit" name="update" value="update"></center>
	</div>
	</center>
	
</form>
</div>
</center>


