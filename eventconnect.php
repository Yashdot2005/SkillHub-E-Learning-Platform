<?php
// Show all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// DB connection
$conn = new mysqli("localhost", "root", "", "skillhub0");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$event = $_POST['event'] ?? '';

// Basic validation
if (empty($name) || empty($email) || empty($event)) {
    echo "<h2 style='color: red; text-align:center;'>All fields are required.</h2>";
    exit;
}

// Correct column name: event_name
$stmt = $conn->prepare("INSERT INTO event_reg_entries (name, email, event_name) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $event);

if ($stmt->execute()) {
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Registration Successful</title>
        <style>
            body {
                background-color: #0f172a;
                color: #22c55e;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .success-box {
                background-color: #1e293b;
                padding: 30px;
                border-radius: 12px;
                box-shadow: 0 8px 16px rgba(0,0,0,0.3);
                text-align: center;
                max-width: 500px;
                width: 90%;
            }
            .success-box h2 {
                margin-bottom: 10px;
                font-size: 24px;
            }
            .success-box p {
                color: #cbd5e1;
                font-size: 16px;
            }
            .success-box a {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #22c55e;
                color: white;
                border-radius: 8px;
                text-decoration: none;
                font-weight: bold;
                transition: background-color 0.3s ease;
            }
            .success-box a:hover {
                background-color: #16a34a;
            }
        </style>
    </head>
    <body>
        <div class='success-box'>
            <h2>🎉 Registration Successful!</h2>
            <p>Thank you, <strong>$name</strong>. You have successfully registered for <strong>$event</strong>.</p>
            <a href='index.php'>Back to Home</a>
        </div>
    </body>
    </html>
    ";
} else {
    echo "<h2 style='color: red; text-align:center;'>Failed to enroll. Please try again.</h2>";
}

$stmt->close();
$conn->close();
?>
