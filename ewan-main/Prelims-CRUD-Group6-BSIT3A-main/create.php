<?php
include "db.conn.php";

if(isset($_POST['submit'])){
    $name = $_POST['FullName'];
    $age = $_POST['Age'];
    $contactnumber = $_POST['Contact'];
    $emailaddress = $_POST['Email'];
    $gender = $_POST['Gender'];

    $sql = "INSERT INTO `peopletable`(`ID`, `NAME`, `AGE`, `CONTACTNUMBER`, `GENDER`, `EMAILADDRESS`) 
    VALUES (NULL, '$name', '$age', '$contactnumber', '$gender', '$emailaddress')";
    
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: welcometophp.php?msg = New record created successfully");
    }
    else{
        echo "Failed: " .mysqli_error($conn);
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Crud System</title>
</head>
<body>

    <div class="container my-5">
             <h3>Add User</h3>
             <p class = "text-muted">Complete the following information</p>

        <form action="" method="post" style = "width:50vw; min-width:300px;">
            <div class = "row mb-3">
                <div class="col">
                    <label class = "form-label">Name:</label>
                    <input type="text" class = "form-control" name = "FullName" placeholder = "">
                </div>
                <div class="col">
                    <label class = "form-label">Age:</label>
                    <input type="number" class = "form-control" name = "Age" placeholder = "">
                </div>
            </div>
            <div class = mb-3>
                <label class = "form-label">Contact No.:</label>
                <input type="number" class = "form-control" name = "Contact" placeholder = "09876543210">
            </div>
            <div class = mb-3>
                <label class = "form-label">Email Address:</label>
                <input type="text" class = "form-control" name = "Email" placeholder = "name@example.com">
            </div>
            <div class = "form-group mb-3">
                <label>Gender:</label> &nbsp;
                <input type = "radio" class = "form-check-input" name = "Gender" id = "male" value = "male">
                <label for = "male" class = "form-inout-label">Male</label>
                &nbsp;
                <input type = "radio" class = "form-check-input" name = "Gender" id = "female" value = "female">
                <label for = "female" class = "form-inout-label">Female</label>
            </div>
            <div>
                <button type = "submit" class = "btn btn-success" name = "submit">Save</button>
                <a  href="welcometophp.php" class = "btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>