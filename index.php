<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<style>
		body{
	background-color: grey;
}

form{
	width:350px;
	
	padding: 20px;
	margin: 10% auto;
	box-sizing: border-box;
	box-shadow: 0 0 5px 1px;
}

form input{
	width: 100%;
	padding-left: 10px;
	margin: 8px 0;
	box-sizing: border-box;
	height:35px;
	border-radius:6px;
}

form input[type="submit"]{
	background:green;
	color: #fff;
	font-weight: bold;
	border:none;
	font-size:16px;
	cursor:pointer;
	
}
	</style>
</head>


<?php
   $connect = mysqli_connect('localhost', 'root', '', 'project');

   if (isset($_POST['register'])){

    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $insert = "INSERT INTO data(name,username,email,password)
    VALUES('$name','$username','$email','$password')";

    $query= mysqli_query($connect,$insert);
   }
?>


<body>
	<form method="POST">
	
	<label>Name</label>
	<input placeholder="Name" type="text" name="name" />
	
	<label>Username</label>
	<input type="text" name="username" />
	
	<label>Email</label>
	<input type="email" name="email" />
	
	<label>Password</label>
	<input type="password" name="password" />
	
	<input type="submit" value="Register" name="register">
	
	</form>
</body>
</html>