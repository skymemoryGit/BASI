<?php
$host = "172.16.1.99";
$db_name = "quintabi";
$username = "quintabi";
$password = "quintabi";
  
try {
    $con = new PDO("pgsql:host={$host};dbname={$db_name}", $username, $password);
}
  
// to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
