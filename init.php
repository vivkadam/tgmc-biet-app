<!--
/**
* Copyright 2015 IBM Corp. All Rights Reserved.
*
* Licensed under the Apache License, Version 2.0 (the “License”);
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* https://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an “AS IS” BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/
-->

<?php include 'condb.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL Sample Application</title>
    <link rel="stylesheet" href="style.css" />
</head>

<?php



echo "Executing CREATE TABLE Query...<br>";
$sqlTable="
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) 
 DEFAULT CHARSET=utf8
";

if ($con->query($sqlTable)) {
    echo "Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create table. "  . mysqli_error();
	die();
}
$sqlTable="
CREATE TABLE IF NOT EXISTS `revaluation` (
  `Receipt` int(11) NOT NULL AUTO_INCREMENT COMMENT 'receipt number',
  `Name` text CHARACTER SET hp8 NOT NULL,
  `USN` varchar(15) CHARACTER SET hp8 NOT NULL COMMENT 'university seat number',
  `Semester` int(11) NOT NULL,
  `Sub` int(11) NOT NULL,
  `DOP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Date of Pay',
  `Amount` float NOT NULL COMMENT 'INR',
  `Account` int(11) NOT NULL,
  PRIMARY KEY (`USN`),
  UNIQUE KEY `Receipt no.` (`Receipt`),
  KEY `Receipt no._2` (`Receipt`)
)
DEFAULT CHARSET=utf8
";

if ($con->query($sqlTable)) {
    echo "Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create table. "  . mysqli_error();
	die();
}
    
$sqlTable="
CREATE TABLE IF NOT EXISTS `photocopy` (
  `Receipt` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `USN` varchar(15) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Sub` int(11) NOT NULL,
  `DOP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Amount` int(11) NOT NULL,
  `Account` varchar(20) CHARACTER SET hp8 NOT NULL,
  PRIMARY KEY (`USN`),
  UNIQUE KEY `Receipt` (`Receipt`)
) 
 DEFAULT CHARSET=utf8
";

if ($con->query($sqlTable)) {
    echo "Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create table. "  . mysqli_error();
	die();
}


?>


<button class = "mybutton" onclick="window.location = 'index.php';">Back</button>

</html>