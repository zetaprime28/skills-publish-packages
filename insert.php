
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
           $sql = "insert into r35_tbl(img, price, carname, year)
                    values('2018_nissan_gtr_283a8572-62085.jpg','$175,000','2018 Nissan GT-R NISMO','set in 2018.')";   
            if(mysqli_query($conn, $sql)){
                 echo "new record created successfully";
             }
             else{
                echo "error";
             }
           
        ?>
</body>
</html>