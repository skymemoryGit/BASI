<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Read Records - PHP CRUD Tutorial</title>
     
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="libs/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
  
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
         
    <!-- custom css -->
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    </style>
    
    <script type='text/javascript'>
   function delete_user( matricola ){
  
  var answer = confirm('Are you sure?');
  if ( answer ){

      //if user clicked ok, pass the id to delete.php and execute the delete query
      window.location = 'delete.php?matricola=' + matricola;
  }
}
    </script>
</head>
<body background ="bg.jpg">
 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>LISTA PRENOTAZIONE DOCENTE</h1>
        </div>
     
<?php
// include database connection
include 'libs/db_connect.php';

// PAGINATION VARIABLES
// page is the current page, if there's nothing set, default is page 1
$page = isset($_GET['page']) ? $_GET['page'] : 1;
 
// set records or rows of data per page
$records_per_page = 5;
 
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;
 
// select data for current page
$query = "SELECT docente, l_numero, l_a_a,l_materia,aula,ora,data from occupa";
    //LIMIT :from_record_num, :records_per_page";
 
$stmt = $db->prepare($query);
//$stmt->bindParam(":from_record_num", $from_record_num, PDO::PARAM_INT);
//$stmt->bindParam(":records_per_page", $records_per_page, PDO::PARAM_INT);
$stmt->execute();
 
// this is how to get number of rows returned
$num = $stmt->rowCount();
 
// link to create record form
echo "<a href='index.php' class='btn btn-primary m-b-1em'>Torna a home</a>";
echo"  ";
echo "<a href='prenotazionedocente.php' class='btn btn-primary m-b-1em'>AGGIUNGI PRENOTAZIONI DOCENTI</a>";
 
//check if more than 0 record found
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";//start table
     
        //creating our table heading
        echo "<tr>";
            echo "<th>DOCENTE</th>";
            echo "<th>NUMERO LEZIONE</th>";
            echo "<th>ANNO ACCADEMICO</th>";
            echo "<th>CODICE MATERIA</th>";
            echo "<th>AULA</th>";
            echo "<th>ORA</th>";
            echo "<th>DATA</th>";
           
        echo "</tr>";
         
        // retrieve our table contents
        // fetch() is faster than fetchAll()
        // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['firstname'] to
            // just $firstname only
            extract($row);
             
            // creating new table row per record
            echo "<tr>";
                echo "<td>{$docente}</td>";
                echo "<td>{$l_numero}</td>";
                echo "<td>{$l_a_a}</td>";
                echo "<td>{$l_materia}</td>";
                echo "<td>{$aula}</td>";
                echo "<td>{$ora}</td>";
                echo "<td>{$data}</td>";
                
              
        }
     
    // end table
    echo "</table>";
    
   
}
 
// if no records found
else{
    echo "<div class='alert alert-danger'>No records found.</div>";
}
?>
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="libs/jquery-3.1.1.js"></script>
  
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
 
</body>
</html>