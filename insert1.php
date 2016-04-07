<?php
include 'condb.php';
$Name=$_POST['name'];
$USN=$_POST['usn'];
$Semester=test($_POST['semester']);
//$Graduation=test($_POST['graduation']);




function test($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}


$dne2=preg_match('/^[a-zA-Z]+[ ]?[a-zA-Z]*$/',$Name);
$dne1=preg_match('/^[0-9][a-zA-Z][a-zA-Z][0-9][0-9][a-zA-Z][a-zA-Z][0-9][0-9][0-9]*$/',$USN);

if ($dne1 && $dne2) 
{
    echo "done";
	$sql="INSERT INTO photocopy(Name,USN,Semester) 
	        VALUES('$Name','$USN','$Semester')";

if ($con->query($sql)) 
{
       echo "Insert success!";
	if(mysqli_affected_rows($con)>0){
            
            include('Pcamount.php');
    }
		   
		
	
		else{
	 echo "not added";
	 echo mysqli_error($con);
 }
 
 }
}
  
else{
	echo "Enter valid details..";
}
?>


