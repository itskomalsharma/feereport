<?php
	include 'accountantmenu.php';
	$a=mysqli_connect('localhost','root','','stu_fee_mgmt');
?>
<head>
	<link rel="stylesheet"href="../bootstrap.min.css" type="text/css">
</head>
<body style="background-image:url('3.jpg'); background-size:cover;">
</body>	


<center>
<br><br><br><div class="card" style="background: rgba(0,0,0,0.5); width:50%;">
<h1 style="color:white;">Search Student Form</h1>
<br><br>
<form action="searchtudent1.php" method="post">
	<center>
	<div class="form-group">
	<div class="row">
		<div class="col-3" style="color:white;">Roll No.:</div>
		<div class="col-9"><input class="form-control"type="number" name="id" placeholder="enter roll no." required></div>
	</div>
	<br><center><input class="btn btn-primary"type="submit" name="search " value="search student"></center>
	</div>
	</center>
	
</form>

</center>


