<?php


function Connect()
{
 $dbhost = "mysql.hostinger.co.uk";
 $dbuser = "u828753246_ieee";
 $dbpass = "ieeeasusb";
 $dbname = "u828753246_ieee";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}



?>