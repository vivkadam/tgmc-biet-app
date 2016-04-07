<?php

if(!$_ENV["VCAP_SERVICES"]){ //local dev
    $mysql_server_name = "localhost";
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_database = "revaluation";
} else { //running in Bluemix
    $vcap_services = json_decode($_ENV["VCAP_SERVICES" ]);
    if($vcap_services->{'mysql-5.5'}){ //if "mysql" db service is bound to this application
        $db = $vcap_services->{'mysql-5.5'}[0]->credentials;
    } 
    else if($vcap_services->{'cleardb'}){ //if cleardb mysql db service is bound to this application
        $db = $vcap_services->{'cleardb'}[0]->credentials;
    } 
    else { 
        echo "Error: No suitable MySQL database bound to the application. <br>";
        die();
    }
    $mysql_database = $db->name;
    $mysql_port=$db->port;
    $mysql_server_name =$db->hostname . ':' . $db->port;
    $mysql_username = $db->username; 
    $mysql_password = $db->password;
}
//echo "Debug: " . $mysql_server_name . " " .  $mysql_username . " " .  $mysql_password . "\n";

$con = new mysqli($mysql_server_name, $mysql_username, $mysql_password, $mysql_database);
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
    die();
}

?>