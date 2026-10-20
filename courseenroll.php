<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "skillhub0";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data safely
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$dob = $_POST['dob'] ?? '';
$course = $_POST['course'] ?? '';
$batch_time = $_POST['batch_time'] ?? '';

// Insert into `enrollment` table
$sql1 = "INSERT INTO enrollment (name, email, phone, dob, course, batch_time) VALUES (?, ?, ?, ?, ?, ?)";
$stmt1 = $conn->prepare($sql1);
$stmt1->bind_param("ssssss", $name, $email, $phone, $dob, $course, $batch_time);

// Insert into `course_enrollments` table (only course name is needed)
$sql2 = "INSERT INTO course_enrollments (course_name) VALUES (?)";
$stmt2 = $conn->prepare($sql2);
$stmt2->bind_param("s", $course);

// Execute both
if ($stmt1->execute() && $stmt2->execute()) {
    // Show success message
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Registration Success</title>
        <style>
            body {
                background-color: #0a192f;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                color: white;
            }
            .success-box {
                background-color: #112240;
                padding: 40px 60px;
                border-radius: 16px;
                text-align: center;
                box-shadow: 0 0 20px rgba(100, 255, 218, 0.15);
            }
            .success-box h2 {
                color: #00ff88;
                font-size: 1.8rem;
                margin-bottom: 20px;
            }
            .success-box p {
                font-size: 1.1rem;
                color: #cbd5e1;
            }
            .success-box strong {
                color: #ffffff;
            }
            .success-box .course {
                font-weight: bold;
                color: #ffffff;
                margin-top: 10px;
            }
            .btn {
                margin-top: 25px;
                display: inline-block;
                padding: 12px 24px;
                background-color: #00ff88;
                color: #0a192f;
                font-weight: bold;
                border: none;
                border-radius: 8px;
                text-decoration: none;
                transition: background 0.3s ease;
            }
            .btn:hover {
                background-color: #00e676;
            }
        </style>
    </head>
    <body>
        <div class='success-box'>
            <h2>🎉 Registration Successful!</h2>
            <p>Thank you, <strong>" . htmlspecialchars($name) . "</strong>. You have successfully registered for</p>
            <div class='course'>" . htmlspecialchars($course) . ".</div>
            <a class='btn' href='index.php'>Back to Home</a>
        </div>
    </body>
    </html>
    ";
} else {
    echo "Error: " . $stmt1->error . "<br>" . $stmt2->error;
}

$stmt1->close();
$stmt2->close();
$conn->close();
?>
