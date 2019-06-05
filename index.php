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
    
</head>
<body background="bg.jpg">
 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1 align="center">HOME CONSERVATORIO</h1>
        </div>
        <form action=home>
          <table border='0' align="center">
              <tr>
                <td>
                  <input type="button" onclick="location.href='richiede.php'" value="Prenotazione aula studente"  style="width:200px;"/>
                 </td> 
                <td>
                  <input type="button" onclick="location.href='prenotazionedocente.php'" value="Prenotazione aula docente" style="width:200px;"/>
                </td>
               </tr> 
               <tr>
                <td><input type="button" onclick="location.href='FormRicercaAula.php'" value="Ricerca aula"  style="width:200px;"/></td>
                <td><input type="button" onclick="location.href='add.php'" value="Aggiungi studente"  style="width:200px;"/></td>
              </tr>
              <tr>
                <td><input type="button" onclick="location.href='lista_studente.php'" value="Lista degli studenti"  style="width:200px;"/></td>
                <td><input type="button" onclick="location.href='lista_occupa.php'" value="Aule occupate"  style="width:200px;"/></td>
              </tr>
              <tr>
                <td><input type="button" onclick="location.href='lista_auleoccupate.php'" value="Lista Aule occupate "  style="width:200px;"/></td>
                <td><input type="button" onclick="location.href='ListaRichiede.php'" value="Lista prenotazioni Studente"  style="width:200px;"/></td>
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
</body>