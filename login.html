<?php
$logged = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'server.php';

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT * FROM users WHERE name='$name' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $logged = 1;
            // header('Location: index.php'); // Uncomment to enable redirection
            // exit();
        } else {
            $invalid = 1;
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <script>
      function formvalidation() {
             let x = document.forms["form2"]["name"].value;
             let z = document.forms["form2"]["password"].value;
             if (x == "" || z == "") {
                 alert("Please enter all the details");
                 return false;
             }
         }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        
        <form action="login.php" method="post" name="form2" onsubmit="return formvalidation()">
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" placeholder="Username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Password">
            
            <br><br>
            By continuing, you agree to Pc Factory Terms of Use and Privacy Policy.

            <br><br>
            <button type="submit" class="button-1">Login</button>
            <button type="button" class="button-2" onclick="window.location.href='signup.php'">Sign up</button>
        </form>
    </div>

    <?php
    if ($logged) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Login Successful! Redirecting...</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
    if ($invalid) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Invalid username or password!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
    ?>

    <style>
    body {
      font-family: Arial, sans-serif;
      background: rgb(2,0,36);
      background: linear-gradient(135deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 28%, rgba(0,212,255,1) 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.2);
      height: 400px;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
      text-align: center;
      backdrop-filter: blur(50px);
      -webkit-backdrop-filter: blur(50px);
      border: 1px solid rgba(65, 65, 65, 0);
    }

    h2 {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 15px;
      text-align: left;
    }

    input {
      width: 90%;
      padding: 10px;
      margin-bottom: 15px;
      margin-left: 0px;
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 5px;
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      color: #000000;
    }

    input::placeholder {
      color: #fff;
    }

    .button-1, .google-btn {
      width: 40%;
      padding: 10px;
      background-color: #00be10;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .button-2 {
      width: 40%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .button-1:hover, .google-btn:hover {
      background-color: #3cff77;
    }

    .button-2:hover {
      background-color: #00438b;
    }

    .alert {
      margin-top: 20px;
    }
    </style>
</body>
</html>

