<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Create a Record </title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="libs/bootstrap-3.3.7-dist/css/bootstrap.min.css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body background="bg.jpg">

    <!-- container -->
    <div class="container">

        <div class="page-header">
            <h1>PRENOTAZIONE AULE/RICHIEDE</h1>
        </div>
 
<?php
 if($_POST){
    //include database connection
    include 'libs/db_connect.php';
  
    try{
        $docente=$_POST['docente'];
        $aula=$_POST['aula'];
        $data=$_POST['data'];
        $ora=$_POST['ora'];
        $uscita=$_POST['uscita'];
        $numero=$_POST['numero']; //l_numero numero della lezione
        $annoaccademico=$_POST['annoaccademico']; //l_a_a
        $materia=$_POST['materia'];  //l_materia  codice della lezione



        if($docente!="" && $aula!="" && $data!="" && $ora!="" && $uscita!="" && $numero!="" && $annoaccademico!="" && $materia!=""){


//INSERISCO PURE IN AULA PRENOTATA
          $query = "INSERT INTO aula_prenotata (aula,data,ora,ora_uscita) values (?,?,?,?)";
      
            //prepare query for excecution
            $stmt = $db->prepare($query);
      
            //bind the parameters
            //this is the first question mark
            $stmt->bindParam(1, $_POST['aula']);
      
            //this is the second question mark
            $stmt->bindParam(2, $_POST['data']);
      
            //this is the third question mark
            $stmt->bindParam(3, $_POST['ora']);
            $stmt->bindParam(4, $_POST['uscita']);
            
          /**  if(!isset($firstname) )
            {
                echo "vuoto";
            }
            else{
                echo "pieno";
            }
      **/
           
           
            // Execute the query
            if($stmt->execute()){
                echo "Record was saved.";
            }else{
                die('Unable to save record.');
        }

//INSERISCO IN OCCUPA


            //write query
            $query = "INSERT INTO occupa (docente,l_numero,l_a_a,l_materia,aula,ora,data) values (?,?,?,?,?,?,?)";
      
            //prepare query for excecution
            $stmt = $db->prepare($query);
      
            //bind the parameters
            //this is the first question mark
            $stmt->bindParam(1, $_POST['docente']);
      
            //this is the second question mark
            $stmt->bindParam(2, $_POST['numero']);
      
            //this is the third question mark
            $stmt->bindParam(3, $_POST['annoaccademico']);
            $stmt->bindParam(4, $_POST['materia']);
             $stmt->bindParam(5, $_POST['aula']);
              $stmt->bindParam(6, $_POST['ora']);
               $stmt->bindParam(7, $_POST['data']);
     
        // Execute the query
            if($stmt->execute()){
                echo "Record was saved.";
            }else{
                die('Unable to save record.');
        }
      }//end if controllo inserimento parametri
        if($docente=="" or $aula=="" or $data="" or $ora="" or $uscita="" or $annoaccademico="" or $materia="" or $numero="" ){
            echo "non hai inserito un parametro";
        }



    }catch(PDOException $exception){ //to handle error
        echo "Error: " . $exception->getMessage();
    }
}
?>


 <!-- html form here where the product information will be entered -->
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Docente</td>
                    <td><input type='text' name='docente' class='form-control' /></td>
                </tr>
                <tr>
                    <td>Aula</td>
                    <td><input type='text' name='aula' class='form-control'></textarea></td>
                </tr>
                <tr>
                    <td>Data</td>
                    <td><input type='text' name='data' class='form-control' /></td>
                </tr>
                <tr>
                    <td>Ora</td>
                    <td><input type='text' name='ora' class='form-control' /></td>
                </tr>
                <tr>
                    <td>Ora uscita</td>
                    <td><input type='text' name='uscita' class='form-control' /></td>
                </tr>
                  <tr>
                    <td>Numero lezione</td>
                    <td><input type='text' name='numero' class='form-control' /></td>
                </tr>
                  <tr>
                    <td>Anno accademico</td>
                    <td><input type='text' name='annoaccademico' class='form-control' /></td>
                </tr>
                  <tr>
                    <td>Codice materia</td>
                    <td><input type='text' name='materia' class='form-control' /></td>
                </tr>

                
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='Save' class='btn btn-primary' />
                        <a href='index.php' class='btn btn-danger'>Back Lista Studenti</a>
                    </td>
                </tr>
            </table>
        </form>

    </div> <!-- end .container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="libs/jquery-3.1.1.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>
</html>
