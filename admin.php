<?php
	$alert=null;
	include 'menu2.php';
	session_start();
	$a=mysqli_connect('localhost','root','','stu_fee_mgmt');
	if(isset($_POST['submit']))
	{
		$users_check=mysqli_query($a,"select * from admin where email='".$_POST['email']."' and password='".$_POST['password']."'");
		$users_count=mysqli_num_rows($users_check);
		if($users_count==1)
		{
			$users=mysqli_fetch_assoc(mysqli_query($a,"select * from admin where email='".$_POST['email']."'and password='".$_POST['password']."'"));
			$_SESSION['user_id']=$users['ID'];
			header('location:admin_panel.php');
			//echo"login successfull";
		}
		else
		{
			$alert="wrong user name or password";
		}
	}
?>
<head>
	<link rel="stylesheet" href="../bootstrap.min.css"/>
</head>
<body style="background-image:url('1.jpg'); background-size:cover; "></body>
<br><br><br><br><center><div class="card" style="width:35%; height:65%; background: rgba(0,0,0,0.5);">
<h1 style="font-family:Adobe Arabic; color:white;">Admin Login Form</h1>

<form action="" method="post">
<div class="form-group p-4">
	<input type="email" name="email" class="form-control"placeholder="Enter Email">
</div>
<div class="form-group p-4">
	<input type="password" name="password" class="form-control"placeholder="Enter Password">
</div>
<div class="form-group p-4">
	<input type="submit" name="submit" value="login" class="btn btn-info btn-block">
	br><h5 style="color:red;"><?php echo $alert;?></h5>
</div>

</form>
</div></center>