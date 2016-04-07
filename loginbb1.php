<?php
include 'condb.php';

$email=$_POST['email'];
/*$mob=$_POST['mob'];*/
$password=$_POST['password'];



if ($email && $password) 
{
$email= stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($con,$email);
$password = mysqli_real_escape_string($con,$password);

$sql="SELECT * FROM admin WHERE email='$email' and password='$password'";
$result=$con->query($sql);
$row = $result->fetch_assoc();
if($row["email"]==$email && $row["password"]==$password){
   // echo "You are a validated user.";
   include ('display.php');
}
else {
    include('invalid.php');
	
   }
}
else{
    echo "error";
    include 'loginadmin.php';
}
?>
