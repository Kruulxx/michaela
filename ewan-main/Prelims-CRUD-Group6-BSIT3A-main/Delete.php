<?php
  include "db.conn.php";

  if (isset($_GET['id'])) {  
    $id = $_GET['id'];  
    $query = "DELETE FROM `peopletable` WHERE id = '$id'";  
    $run = mysqli_query($conn,$query);  
    if ($run) {  
         header('location:welcometophp.php');  
    }else{  
         echo "Error: ".mysqli_error($con);  
    }  
}  
?>