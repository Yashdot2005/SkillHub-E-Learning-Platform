<?php
require 'config.php';
session_start();

$feedback = ""; // For success or error messages
$redirectScript = ""; // For redirection script

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $stored_password, $role);
        $stmt->fetch();

        if ($password === $stored_password) { // You can replace this with password_verify() for hashing
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;

            $feedback = '<div class="message">Login successful. Redirecting...</div>';

            // Redirect based on role
            if ($role === 'admin') {
                $redirectScript = "<script>setTimeout(() => { window.location.href = 'dashboard.php'; }, 2000);</script>";
            } else {
                $redirectScript = "<script>setTimeout(() => { window.location.href = 'index.php'; }, 2000);</script>";
            }
        } else {
            $feedback = '<div class="error">Incorrect password.</div>';
        }
    } else {
        $feedback = '<div class="error">No user found with that username.</div>';
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #0a192f;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            width: 400px;
            background-color: #112240;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
        }
        h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }
        label {
            color: #fff;
            margin-bottom: 5px;
            display: block;
        }
        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background: #233554;
            color: #fff;
        }
        input::placeholder {
            color: #ccc;
        }
        button {
            width: 100%;
            background-color: #64ffda;
            color: #0a192f;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #52e0c4;
        }
        .message, .error {
            text-align: center;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
            font-weight: bold;
        }
        .message {
            background-color: #28a745;
            color: white;
        }
        .error {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Login</h2>
        <?= $feedback ?>
        <label>Username:</label>
        <input type="text" name="username" placeholder="Enter your username" required>

        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your password" required>

        <button type="submit">Login</button>
    </form>
    <?= $redirectScript ?>
</body>
</html>
