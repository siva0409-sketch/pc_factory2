<?php 
$registered = 0; 
$userexists = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    include 'server.php'; // Ensure this file correctly connects to the database

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = $_POST['password'];
    $retypePassword = $_POST['retypePassword'];

    if ($password !== $retypePassword) {
        echo '<script>alert("Passwords do not match!");</script>';
    } else {
        // Check if user already exists
        $sql = "SELECT * FROM users WHERE name='$name'";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $userexists = 1;
        } else {
            // Hash the password before storing it
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($con, $sql);
            
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPassword);
                $exec = mysqli_stmt_execute($stmt);
                
                if ($exec) {
                    $registered = 1;
                } else {
                    die("Error: " . mysqli_error($con));
                }

                mysqli_stmt_close($stmt);
            } else {
                die("Error in statement preparation: " . mysqli_error($con));
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Create Your Account</h2>

        <form action="signup.php" method="post" onsubmit="return validateForm()">
            <label for="uname">Username:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="pswd">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="retype-password">Retype Password:</label>
            <input type="password" id="retypePassword" name="retypePassword" required>

            <button type="submit">Create Account</button>
        </form>

        <style>
            body {
                font-family: Arial, sans-serif;
                background: linear-gradient(135deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 28%, rgba(0,212,255,1) 100%);
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .login-container {
                background: rgba(255, 255, 255, 0.2);
                padding: 20px;
                border-radius: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 400px;
                text-align: center;
                backdrop-filter: blur(50px);
                border: 1px solid rgba(65, 65, 65, 0);
            }

            h2 {
                margin-bottom: 20px;
            }

            label {
                display: block;
                margin-bottom: 10px;
                text-align: left;
                font-weight: bold;
            }

            input {
                width: 90%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid rgba(255, 255, 255, 0.3);
                border-radius: 5px;
                background: rgba(255, 255, 255, 0.2);
                backdrop-filter: blur(5px);
                color: #000000;
            }

            button {
                width: 100%;
                padding: 10px;
                background-color: #00be10;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            button:hover {
                background-color: #3cff77;
            }

            .alert {
                margin-top: 10px;
                padding: 10px;
                border-radius: 5px;
                font-weight: bold;
                text-align: center;
            }

            .alert-success {
                background-color: #4CAF50;
                color: white;
            }

            .alert-danger {
                background-color: #FF5733;
                color: white;
            }
        </style>

    <?php
    if ($userexists) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error</strong> User already exists.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>

    <?php
    if ($registered) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congrats</strong> You are successfully Signed In.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>

    </div>

    <script>
        function validateForm() {
            let password = document.getElementById("password").value;
            let retypePassword = document.getElementById("retypePassword").value;

            if (password !== retypePassword) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
