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
           $dbname = "final_db";
           $conn = mysqli_connect($servername,$username,$password,$dbname);
           if (!$conn){
            die("connection failed:".mysqli_connect_erroe());
           }
        ?>
</body>
</html>