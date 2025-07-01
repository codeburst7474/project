<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "user";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password === $cpassword) {
        $sql = "INSERT INTO user (username, password, date) VALUES ('$username', '$password', NOW())";
        if ($conn->query($sql) === TRUE) {
            header("Location: welcome.php");
            exit();
        } else {
            $error = "Error: " . $conn->error;
        }
    } else {
        $error = "Passwords do not match.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up - QuickTask</title>
  <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: #f8f9fa;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .signup-box {
      background: white;
      padding: 30px;
      width: 300px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    h2 {
      text-align: center;
      color: #00bcd4;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 12px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .btn {
      width: 100%;
      padding: 12px;
      background-color: #00bcd4;
      border: none;
      color: white;
      font-weight: bold;
      margin-top: 20px;
      cursor: pointer;
      border-radius: 4px;
    }

    .btn:hover {
      background-color: #008c99;
    }

    .error {
      color: red;
      margin-bottom: 10px;
      text-align: center;
    }

    footer {
      background: #111;
      color: #fff;
      text-align: center;
      padding: 1rem;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    footer b {
      display: block;
      margin-top: 0.5rem;
      color: #00bcd4;
    }

    .logo {
      display: block;
      margin: 0 auto 20px;
      width: 150px;
      height: auto;
    }
  </style>
</head>
<body>

  <div class="signup-box">
    <!-- <img src="logo.png" alt="QuickTask Logo" class="logo"> -->
    <h2>Sign Up</h2>

    <?php if ($error): ?>
      <div class="error"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" action="sign.php">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" required />
      </div>
      <div class="form-group">
        <label for="cpassword">Confirm Password</label>
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required />
      </div>
      <button type="submit" class="btn">Register</button>
    </form>

    <p style="text-align:center; margin-top: 15px;">Already have an account? <a href="login.php" style="color: #00bcd4;">Login</a></p>
  </div>

  <footer>
    <p>&copy; 2025 QuickTask</p>
    <b>Made by Udit Kumar Gupta</b>
  </footer>

</body>
</html>
