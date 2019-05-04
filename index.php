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

$sql=$db->query("SELECT * FROM studente;");
$sql->setFetchMode(PDO::FETCH_BOTH);


while($row=$sql->fetch()){
	$lstStand=$row;
	echo '<tr><td>'.$row['nome'].'</td><td>'.$row['cognome'].'</td><td>'.$row['matricola'].'</td>';
}
			





?>



</body>
</html>
