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

$query = "SELECT matricola,cognome,nome FROM studente ;
$result = pg_query($query);
if (!$result) {
    echo "Problem with query " . $query . "<br/>";
    echo pg_last_error();
    exit();
}

$myrow = pg_fetch_assoc($result); 
$value == $myrow[rating];
$value2 == $myrow[numofratings];

echo "$value, $value2";









/*
$query = "SELECT matricola,nome,cognome FROM studente";

$stmt = $con-> prepare( $query );
$stmt->execute();


$num = $stmt->rowCount();

echo "il numero della tab :".$num ;



if($num>0){
  
    //start table
    echo "<table border='2'>";
  
        //creating our table heading
        echo "<tr>";
            echo "<th>matricola</th>";
            echo "<th>nome</th>";
            echo "<th>cognome</th>";
          //  echo "<th>Action</th>";
        echo "</tr>";
  
        //retrieve our table contents
        //fetch() is faster than fetchAll()
        //http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            //extract row
            //this will make $row['firstname'] to
            //just $firstname only
            extract($row);
  
            //creating new table row per record
            echo "<tr>";
                echo "<td>{$matricola}</td>";
                echo "<td>{$nome}</td>";
                echo "<td>{$cognome}</td>";
                echo "<td>";
                    //we will use this links on next part of this post
                    echo "<a href='edit.php?id={$id}'>Edit</a>";
                    echo " / ";
                    //we will use this links on next part of this post
                    echo "<a href='#' onclick='delete_user( {$id} );'>Delete</a>";
                echo "</td>";
            echo "</tr>";
        }
  
    //end table
    echo "</table>";
  
}
  
//if no records found
else{
    echo "No records found.";
}
?> 
<!-- dynamic content will be here -->
 

*/
</body>
</html>
