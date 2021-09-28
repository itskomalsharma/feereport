<?php
	include 'accountantmenu.php';
	$a=mysqli_connect('localhost','root','','stu_fee_mgmt');
	$result=mysqli_query($a,"select * from addstudent where id='".$_POST['id']."'");
	$data=mysqli_fetch_assoc($result)

?>	
<head>
	<link rel="stylesheet"href="../bootstrap.min.css" type="text/css">
</head>
<table class="table">
		<tr>
			<td style="color:#151AF0;">id</td>
			<td scope="col"><?php echo $data['id'];?></td>
		</tr>
		<tr>
			<td style="color:#151AF0;">Name</td>
			<td scope="col"><?php echo $data['name'];?></td>
		</tr>
		<tr>
			<td style="color:#151AF0;">E-mail</td>
			<td scope="col"><?php echo $data['email'];?></td>
		</tr>
		<tr>
			<td style="color:#151AF0;">Fee</td>
			<td scope="col"><?php echo $data['fee'];?></td>
		</tr>
		<tr>
			<td style="color:#151AF0;">Paid</td>
			<td scope="col"><?php echo $data['paid'];?></td>
		</tr>
		<tr>
			<td style="color:#151AF0;">Due</td>
			<td scope="col"><?php echo $data['due'];?></td>
		</tr>
		<tr>
			<td style="color:#151AF0;">Gender</td>	
			<td scope="col"><?php echo $data['sex'];?></td>
		</tr>
		<tr>
			<td style="color:#151AF0;">Course</td>
			<td scope="col"><?php echo $data['course'];?></td>
		</tr>
		<tr>
			<td style="color:#151AF0;">Contact</td>
			<td scope="col"><?php echo $data['contact'];?></td>
		</tr>
		<tr>
			<td style="color:#151AF0;">Address</td>
			<td scope="col"><?php echo $data['address'];?></td>
		</tr>
</table>
