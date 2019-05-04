<!DOCTYPE HTML>
<html>
    <head>
        <title>PDO Read Records - code from codeofaninja.com</title>
  
    </head>


<body>

<h1>PDO: Read Records</h1>
  

<?php

//include database connection
include 'db_connect.php';
  
//select all data
$query = "SELECT * FROM studente" ;
$result = pg_query($query);
if (!$result) {
    echo "Problem with query " . $query . "<br/>";
    echo pg_last_error();
    exit();
}

$myrow = pg_fetch_assoc($result); 
$value == $myrow[matricola];
$value2 == $myrow[cognome];

echo "$value, $value2";






?>



</body>
</html>
