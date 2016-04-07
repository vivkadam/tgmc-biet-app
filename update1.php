<?php
include 'condb.php';
$usn=$_POST['USN'];
$sub=test($_POST['sub']);
$account=$_POST['Account'];
$amount=300*$sub;

function test($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

$sql = "UPDATE photocopy SET Sub = '$sub',Account='$account',Amount=$amount WHERE USN = '$usn'";

if($res=$con->query($sql)){
	echo "done";
	include 'banklinks.php';
}
else{
	echo "error";
}
?>