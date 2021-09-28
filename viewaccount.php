<?php
	include 'menu.php';
	$a=mysqli_connect('localhost','root','','stu_fee_mgmt');
?>
<head>
	<link rel="stylesheet"href="bootstrap.min.css" type="text/css">
</head>
<br>
<table class="table table-hover">
	<thead class="thead-dark">
	<tr style="color:#151AF0;">
		<th scope="col">Id</th>
		<th scope="col">Name</th>
		<th scope="col">E-mail</th>
		<th scope="col">Contact</th>
		<th scope="col">Address</th>
		<th scope="col">Password</th>
		<th scope="col">Edit</th>
		<th scope="col">Delete</th>
	</tr>
	</thead>
<?php
	$result=mysqli_query($a,"select * from account");
	while($data=mysqli_fetch_assoc($result))
	{
		echo'
	<tbody style="background:#E6E8E9;">
		
		<tr>
			<th scope="col">'.$data['id'].'</th>
			<th scope="col">'.$data['name'].'</th>
			<th scope="col">'.$data['email'].'</th>
			<th scope="col">'.$data['contact'].'</th>
			<th scope="col">'.$data['address'].'</th>
			<th scope="col">'.$data['password'].'</th>
			<th scope="col"><a href="edit.php?id='.$data['id'].'">edit</a></th>
			<th scope="col"><a href="delete.php?id='.$data['id'].'"style="color:red;">delete</a></th>
		</tr>
	</tbody>';
	}
?>
</table>
