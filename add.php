<!DOCTYPE HTML>
<html>
    <head>
        <title>PDO Create New Record</title>
  
    </head>
<body>
 
<?php
 if($_POST){
    //include database connection
    include 'libs/db_connect.php';
  
    try{
  
        //write query
        $query = "INSERT INTO ye_isuru SET firstname = ?, lastname = ?, username = ?, password  = ?";
  
        //prepare query for excecution
        $stmt = $con->prepare($query);
  
        //bind the parameters
        //this is the first question mark
        $stmt->bindParam(1, $_POST['firstname']);
  
        //this is the second question mark
        $stmt->bindParam(2, $_POST['lastname']);
  
        //this is the third question mark
        $stmt->bindParam(3, $_POST['username']);
  
        //this is the fourth question mark
        $stmt->bindParam(4, $_POST['password']);
  
        // Execute the query
        if($stmt->execute()){
            echo "Record was saved.";
        }else{
            die('Unable to save record.');
        }
  
    }catch(PDOException $exception){ //to handle error
        echo "Error: " . $exception->getMessage();
    }
}
?>


<!-- dynamic content will be here -->
<!-- just a header -->
<h1>PDO: Add a Record</h1>
 
<!--we have our html form here where user information will be entered-->
<form action='#' method='post' border='0'>
    <table>
        <tr>
            <td>Firstname</td>
            <td><input type='text' name='firstname' required /></td>
        </tr>
        <tr>
            <td>Lastname</td>
            <td><input type='text' name='lastname' required /></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type='text' name='username' required /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type='password' name='password' required /></td>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save' />
  
                <a href='index_log.php'>Back to index</a>
            </td>
        </tr>
    </table>
</form> 
</body>
</html>
