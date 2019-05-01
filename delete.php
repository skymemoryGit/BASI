<?php
include 'libs/db_connect.php';
// delete sql query
$sql = "DELETE FROM ye_isuru WHERE id = ?";

// prepare the sql statement
if($stmt = $con->prepare($sql)){
  
    // bind the id of the record to be deleted
    // we use "i" here for integer
    $stmt->bindParam(1, $_GET['id']);
  
    // execute the delete statement
    if($stmt->execute()){


    // redirect to index page
        // parameter "action=deleted" is used to show that something was deleted
        header('Location: index.php?action=deleted');
  
    }else{
        die("Unable to delete.");
    }
  
}
?>
