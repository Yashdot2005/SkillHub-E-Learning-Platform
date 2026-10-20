<?php
session_start();

// Only allow admin access
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

require 'config.php'; // contains $conn = new mysqli(...) or mysqli_connect()

// Query to count enrollments per course
$sql = "SELECT course_name, COUNT(*) AS total_enrollments FROM course_enrollments GROUP BY course_name";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page - Course Enrollments</title>
    <style>
        body {
            background-color: #0a192f;
            color: #64ffda;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 40px;
        }
        .admin-box {
            background-color: #112240;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            max-width: 700px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #0f2a49;
            color: #ccd6f6;
        }
        th, td {
            padding: 12px;
            border: 1px solid #233554;
            text-align: center;
        }
        th {
            background-color: #64ffda;
            color: #0a192f;
        }
    </style>
</head>
<body>
    <div class="admin-box">
        <h1>Course Enrollments</h1>
        <table>
            <tr>
                <th>Course Name</th>
                <th>Total Enrollments</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['course_name']}</td><td>{$row['total_enrollments']}</td></tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No enrollments yet.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
