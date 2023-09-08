<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
            width:700px;
            margin: 10% auto;
        }
        th,td{
            border:1px solid black;
            text-align: center;
            padding:5px;
        }
        tr:nth-child(odd){
            background-color:teal;
        }
    </style>
 

</head>
<body>
    <table>
        <tr ><th colspan="4"  align="center">Database Info</th></tr>
        <tr>
            
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

     <?php 
        $connect = mysqli_connect('localhost','root','','project');
        $query = "SELECT * from data";
        $result=mysqli_query($connect,$query);
        while($info=mysqli_fetch_array($result)){
    ?>

            <tr>
                <td><?php echo $info['name'] ?></td>
                <td><?php echo $info['username'] ?></td>
                <td><?php echo $info['email']?></td>
                <td><?php echo $info['password']?></td>
            </tr>

    <?php

        }
     ?>

    </table>
</body>
</html>