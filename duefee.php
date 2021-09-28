
<head>
	
	<link rel="stylesheet"href="bootstrap.min.css" type="text/css">
</head>
<table class="table table-hover">
	<thead class="thead-dark">
	<tr style="color:#151AF0;">
		<th scope="col">ID</th>
		<th scope="col">NAME</th>
		<th scope="col">E-MAIL</th>
		<th scope="col">FEE</th>
		<th scope="col">PAID</th>
		<th scope="col">DUE</th>
		<th scope="col">GERDER</th>
		<th scope="col">COURSE</th>
		<th scope="col">CONTACT</th>
		<th scope="col">ADDRESS</th>
		<th scope="col">EDIT</th>
		<th scope="col">DELETE</th>
	</tr>
	</thead>
<?php
	include 'accountantmenu.php';
	$a=mysqli_connect('localhost','root','','stu_fee_mgmt');
	$result=mysqli_query($a,"select * from addstudent where not due =0");
	while($data=mysqli_fetch_assoc($result))
	{
		echo'
	<tbody>
		
		<tr>
			<th scope="col">'.$data['id'].'</th>
			<th scope="col">'.$data['name'].'</th>
			<th scope="col">'.$data['email'].'</th>
			<th scope="col">'.$data['fee'].'</th>
			<th scope="col">'.$data['paid'].'</th>
			<th scope="col">'.$data['due'].'</th>
			<th scope="col">'.$data['sex'].'</th>
			<th scope="col">'.$data['course'].'</th>
			<th scope="col">'.$data['contact'].'</th>
			<th scope="col">'.$data['address'].'</th>
			<th scope="col"><a href="studentedit.php?id='.$data['id'].'">edit</a></th>
			<th scope="col"><a href="studentdelete.php?id='.$data['id'].'"style="color:red;">delete</a></th>
		</tr>
	</tbody>';
	}
?>
</table>
