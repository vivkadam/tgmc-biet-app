<html>
<style>
table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration:underline;
}
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin:20px 400px 20px 350px;
	border:#ccc 1px solid;

	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;
	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child {
	text-align: left;
	padding-left:20px;
}
table tr:first-child th:first-child {
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child {
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr {
	text-align: center;
	padding-left:20px;
}
table td:first-child {
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
table td {
	padding:18px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
    font-size:20px;
	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td {
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td {
	border-bottom:0;
}
table tr:last-child td:first-child {
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child {
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td {
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
}

body{
	background-image:url("blood2.jpg");
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

h1{
    margin-bottom:-20px;
}
h2{
    margin-top:20px;
}

</style>
<body>

<?php 
include 'condb.php';

$sql = "SELECT * FROM revaluation";
$result = $con->query($sql);
$count=0;
if ($result->num_rows > 0) {
	echo "REVALUATION";
echo "<table border='1' align='center' style='border-collapse:collapse;border:'red';>
  <tr>
    <td style='color:brown' align='center'><i>Id</td>  
    <td style='color:brown' align='center'><i>Receipt No</td>  
    <td style='color:brown' align='center'><i>Name</td>
    <td style='color:brown'><i>USN</td>
	<td style='color:brown'><i>Semester</td>
	<td style='color:brown'><i>No. of subjects</td>
    <td style='color:brown'><i>DOP</td>
    <td style='color:brown'><i>Amount</td>
    </tr>";
     while($row = $result->fetch_assoc()) {
        echo "<tr>";
  echo "<td align='center'>".++$count."</td>";
  echo "<td align='center'>".$row['Receipt']."</td>";
  echo "<td align='center'>".$row['Name']."</td>";
  echo "<td align='center'>".$row['USN']."</td>";
  echo "<td align='center'>".$row['Semester']."</td>";
  echo "<td align='center'>".$row['Sub']."</td>";
  echo "<td align='center'>".$row['DOP']."</td>";
  echo "<td align='center'>".$row['Amount']."</td>"."<br>";
  echo "</tr>"; 
     }
} 
else{
	echo "<h1 font size='20px' style='color:red' align='center'>Nothing found</h1>";
}

$sql = "SELECT * FROM photocopy";
$result = $con->query($sql);
$count1=0;
if ($result->num_rows > 0) {
	
echo "<table border='1' align='center' style='border-collapse:collapse;border:'red';>
  <tr>
    <td style='color:brown' align='center'><i>Id</td>  
    <td style='color:brown' align='center'><i>Receipt No</td>  
    <td style='color:brown' align='center'><i>Name</td>
    <td style='color:brown'><i>USN</td>
	<td style='color:brown'><i>Semester</td>
	<td style='color:brown'><i>No. of subjects</td>
    <td style='color:brown'><i>DOP</td>
    <td style='color:brown'><i>Amount</td>
    </tr>";
     while($row = $result->fetch_assoc()) {
        echo "<tr>";
  echo "<td align='center'>".++$count1."</td>";
  echo "<td align='center'>".$row['Receipt']."</td>";
  echo "<td align='center'>".$row['Name']."</td>";
  echo "<td align='center'>".$row['USN']."</td>";
  echo "<td align='center'>".$row['Semester']."</td>";
  echo "<td align='center'>".$row['Sub']."</td>";
  echo "<td align='center'>".$row['DOP']."</td>";
  echo "<td align='center'>".$row['Amount']."</td>"."<br>";
  echo "</tr>"; 
     }
} 
else{
	echo "<h1 font size='20px' style='color:red' align='center'>Nothing found</h1>";
}

echo "PHOTOCOPY";
?>

<form action="selection.php">
<input type="submit" value="Back">
</form>
<br><br>
<a href="selection.php">Log out</a>
</body>
</html>
