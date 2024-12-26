<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            display: flex;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 800px;
            width: 100%;
        }
        .login-box img {
            width: 50%;
            object-fit: cover;
        }
        .login-form {
            padding: 40px;
            width: 50%;
        }
        .login-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .login-form p {
            margin-bottom: 20px;
            color: #666;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #f9a825;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .login-form button:hover {
            background-color: #f57c00;
        }
        .login-form .alt-links {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }
        .login-form .alt-links a {
            color: #388e3c;
            text-decoration: none;
        }
        .login-form .alt-links a:hover {
            text-decoration: underline;
        }
    </style>
   <div class="container">
    <div class="login-box">
        <img src="sever/img/carbanner.png" alt="" class="ms-3 w-50 h-50">
        <div class="login-form">
            <form action="datalogin.php" method="POST">
                <h2>Login your Account</h2>
                <p>Since this is your first trip, you'll need to provide us with some information before you can check out.</p>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <span class="d-flex justify-content-center" id="toggleText" style="cursor: pointer; color: blue;" onclick="togglePassword()">Show Password</span>
                <button type="submit" class="mt-3">Login</button>
                <div class="alt-links">
                </div>
                <p>New member? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var toggleText = document.getElementById("toggleText");
        
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleText.textContent = "Hide Password"; 
        } else {
            passwordInput.type = "password";
            toggleText.textContent = "Show Password";
        }
    }
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
