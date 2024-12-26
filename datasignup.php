<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('sever/connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = trim($_POST['first_name']);
    $lastname = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } elseif (strlen($password) < 6) {
        echo "Password must be at least 6 characters long.";
    } else {
        $checkSql = "SELECT * FROM signup_tbl WHERE email = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bind_param("s", $email);
        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();

        if ($checkResult->num_rows > 0) {
            echo "This email is already registered. Please <a href='signup.php'>Sign Up</a> New Email.";
        } else {
            $sql = "INSERT INTO signup_tbl (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);

                if ($stmt->execute()) {
                    header("Location: sever/listcars.php");
                    exit(); 
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Error in preparing statement: " . $conn->error;
            }
        }

        $checkStmt->close();
    }
}

$conn->close();   
            
?>

</body>
</html>


