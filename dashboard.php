<?php
session_start();

// Allow access only if logged in as admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <style>
        body {
            background-color: #0a192f;
            color: #64ffda;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .admin-box {
            background-color: #112240;
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            margin-top: 10px;
            color: #ccd6f6;
        }

        .btn {
            margin-top: 25px;
            padding: 12px 24px;
            background-color: #64ffda;
            color: #0a192f;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background-color: #52e0c4;
        }
    </style>
</head>
<body>
    <div class="admin-box">
        <h1>Welcome Admin!</h1>
        <p>You are in the <strong>Admin Page</strong>.</p>
        <a href="admin_pannel.php" class="btn">View Course Enrollments</a>
    </div>
</body>
</html>
