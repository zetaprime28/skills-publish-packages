<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername, $username, $password);
        if(!$conn){ 
            die("Connection Fialed: ".mysqli_connect_error());
        }
        $sql = "CREATE DATABASE final_db";
        if (mysqli_query($conn, $sql)) {    
            echo "Database created successfully";
        } else {    
            echo "Error creating database: " . mysqli_error($conn);
        }  
    ?>
</body>
</html>