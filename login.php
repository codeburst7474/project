<?php
session_start();

$server = "localhost";
$user = "root";
$password = "";
$database = "user";

// Create connection
$conn = mysqli_connect($server, $user, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Direct SQL (unsafe for production)
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Incorrect username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - QuickTask</title>
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

    .login-box {
      background: white;
      padding: 30px;
      width: 300px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #00bcd4;
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
  </style>
</head>
<body>

  <div class="login-box">
    <h2>Login</h2>

    <?php if ($error): ?>
      <div class="error"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" action="login.php">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />
      </div>
      <button type="submit" class="btn">Login</button>
    </form>

    <p style="text-align:center; margin-top: 15px;">New user? <a href="sign.php" style="color: #00bcd4;">Register</a></p>
  </div>

  <footer>
    <p>&copy; 2025 QuickTask</p>
    <b>Made by Udit Kumar Gupta</b>
  </footer>

</body>
</html>
