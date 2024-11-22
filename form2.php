<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

if($_SERVER['REQUEST_METHOD']=="POST"){

$username=$_POST['username'];
$email=$_POST['email'];
$phonenumber=$_POST['phone'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$year=$_POST['class'];
$color=$_POST['color'];
$volume=$_POST['volume'];
}



?>

<table border='2' cellpadding='20px'cellspacing='0'>
<tr>
<th>username</th>
<th>email</th>
<th>select</th>
<th>password</th>
<th>gender</th>
<th>year</th>
<th>color</th>
<th>volume</th>
</tr>
<tr>

<td><?php echo $username; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $select;?></td>
<td><?php echo $password;?></td>
<td><?php echo $gender ;?></td>
<td><?php echo $year;?></td>
<td><?php echo $color;?></td>
<td><?php echo $volume;?></td>





</tr>







</table>





    
</body>
</html>