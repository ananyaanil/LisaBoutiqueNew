<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:aanilserver.database.windows.net,1433; Database = Lisdatabase", "aanil12", "ashley98R");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "aanil12@aanilserver", "pwd" => "ashley98R", "Database" => "Lisdatabase", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:aanilserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
