<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 350px;
            padding: 20px;
            margin: 10% auto;
            box-shadow: 0 0 5px 1px;
            box-sizing: border-box;
        }
        form input{
            width:100%;
            height:35px;
            box-sizing: border-box;
            padding: 6px;
            border-radius:5px;
            margin: 7px 0;           
        }
        form input[type="submit"]{
            background: green;
            color: #fff;
            font-size: 16px;
            font-weight:bold;
            cursor:pointer;
        }
    </style>
</head>

<?php

$connect = mysqli_connect('localhost','root','','project');

if(isset($_POST['show'])){
    header("Location: show.php");
}
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
$insert = "INSERT INTO data(name,username,email,password)
VALUES('$name','$username','$email','$password')";
    $query = mysqli_query($connect,$insert);
    header("Location: success.php");
}

?>



<body>
<form action="" method="post">
    <label>Name</label>
    <input name="name" type="text"/>
    <label >Username</label>
    <input type="text" name="username">
    <label >Email</label>
    <input type="text" name="email">
    <label >Password</label>
    <input type="pasword" name="password">
    <a href="C:\xampp\htdocs\show.php">
    <input type="submit" value="Register" name="register">
    </a>

    <input type="submit" name="show" value="Show Table">
</form>



</body>
</html>
