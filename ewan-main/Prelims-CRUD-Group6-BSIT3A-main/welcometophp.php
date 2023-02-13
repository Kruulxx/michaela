<?php
include "db.conn.php";

?>
<!DOCTYPE html>

<html lang ="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content = "IE=edge">
<meta name= "viewport" content = "width", initial-scale=1.0>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
<title> CRUD</title>
</head>
<body>

<div class = "container my-5">
     <h2>People</h2>
     <a class="btn btn-primary" href="create.php" role ="button"> New People </a>
     <br>

<table class = "table">
        <thead>

        <tr>

        <th> ID </th>
        <th> Name </th>
        <th> Age </th>
        <th> Contact Number </th>
        <th> Email Address </th>
        <th> Gender </th>
        <th> Action </th>

        </tr>

        </thead>

        <tbody>
                        <?php
                        
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "crud";


        $connection = new mysqli($servername,$username,$password,$database);

        if($connection ->connect_error){
                die("connection failed: ".$connection->connect_error);
        }
        

        $sql = "SELECT * FROM peopletable";
        $result = $connection->query($sql);
        
        if(!$result){
                die("Invalid query: ".$connection->error);  
        }
        
        while ($row = $result->fetch_assoc()){
                echo"
                <tr>
                <td> $row[id] </td>
                <td> $row[name] </td>
                <td> $row[age] </td>
                <td> $row[contactnumber] </td>
                <td> $row[emailaddress] </td>
                <td> $row[gender] </td>
        <td> 
        
                 <a class = 'btn btn-primary btn-sm' href = 'edit.php?id=$row[id]'>Edit</a> 
                 <a class = 'btn btn-primary btn-sm' href = 'delete.php?id=$row[id]'>Delete</a> 
                   
                 
        </td>
        </tr>
          
     
        ";          
        }
    ?>
       

        </tbody>

</table>


</div>
   

</body>


</html>