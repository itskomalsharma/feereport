<?php
include 'accountantmenu.php';
	$a=mysqli_connect('localhost','root','','stu_fee_mgmt');	
?>
<body style="background-image:url('student.jpg'); background-size:cover;">
</body>
<br>
<h1>Accountant Panel</h1>
<div>
<br><h6><a href="addstudent.php">Add Student</a></h6>
<h6><a href="viewstudent.php">View Student</a></h6>
<h6><a href="duefee.php">Due Fee</a></h6>
<h6><a href="studentsearch.php">Search Student</a></h6>
</div>
