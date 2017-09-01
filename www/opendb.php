<?php
// PHP Data Objects(PDO) Sample Code:
$host="lisbotique-mysqldbserver.mysql.database.azure.com";
$port=3306;
$socket="";
$user="mysqldbuser@lisbotique-mysqldbserver";
$password="ashley98R";
$dbname="accounts";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket) 
or die ('Could not connect to the database server' . mysqli_connect_error());

?>
