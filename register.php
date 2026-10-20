<?php
$selectedEvent = isset($_GET['event']) ? $_GET['event'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Event Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #0a192f;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color: #ffffff;
    }

    .container {
      background-color: #112240;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
      max-width: 420px;
      width: 100%;
    }

    h2 {
      text-align: center;
      color: #64ffda;
      margin-bottom: 1.5rem;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 12px;
      margin-bottom: 1rem;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      background-color: #1c2b42;
      color: #ffffff;
    }

    input[type="submit"] {
      background-color: #64ffda;
      color: #0a192f;
      border: none;
      padding: 12px;
      width: 100%;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #52e0c4;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Event Registration</h2>

  <form action="eventconnect.php" method="POST">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" placeholder="John Doe" required>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" placeholder="you@example.com" required>

    <label for="event">Select Event:</label>
    <select id="event" name="event" required>
      <option value="" disabled <?= $selectedEvent == '' ? 'selected' : '' ?>>-- Choose an event --</option>
      <option value="Generative AI Workshop" <?= $selectedEvent == 'Generative AI Workshop' ? 'selected' : '' ?>>Generative AI Workshop</option>
      <option value="Cloud Computing Bootcamp" <?= $selectedEvent == 'Cloud Computing Bootcamp' ? 'selected' : '' ?>>Cloud Computing Bootcamp</option>
      <option value="UI/UX Design Workshop" <?= $selectedEvent == 'UI/UX Design Workshop' ? 'selected' : '' ?>>UI/UX Design Workshop</option>
      <option value="Blockchain & Cryptomeetup" <?= $selectedEvent == 'Blockchain & Cryptomeetup' ? 'selected' : '' ?>>Blockchain & Cryptomeetup</option>
    </select>

    <input type="submit" value="Register">
  </form>
</div>

</body>
</html>
