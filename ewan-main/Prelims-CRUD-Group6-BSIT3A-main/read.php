
<?php
include"read.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>READ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row p-2">
        <div class="shadow">
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Gender</th>

                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    

                    while($row = mysqli_fetch_assoc($result)) {

                        ?>
                   
                    <tr>
                        <th scope="row"><?= $row['Id'] ?></th>
                        <td><?=$row['Name']   ?></td>
                        <td><?=$row['Age']   ?></td>
                        <td><?=$row['Contact Number']   ?></td>
                        <td><?=$row['Email Address']   ?></td>
                        <td><?=$row['Gender']   ?></td>

                    </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>