<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'connection.php';
        $sql = "create table bmw_tbl(
            id int(11) unsigned auto_increment primary key,
            img blob(150)not null,
            price varchar(150)not null,
            carname varchar(150)not null,
            year varchar(100))";    
        if (mysqli_query($conn, $sql)) {    
            echo "table created successfully";
        } else {    
            echo "Error creating table: " . mysqli_error($conn);
        }  
    ?>
</body>
</html>