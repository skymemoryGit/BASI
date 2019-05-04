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

$result = pg_query($db, "SELECT nome, matricola FROM studente");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "Author: $row[0]  E-mail: $row[1]";
  echo "<br />\n";
}





?>



</body>
</html>
