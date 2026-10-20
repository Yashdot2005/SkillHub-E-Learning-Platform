<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Course Enrollment</title>
  <style>
    body {
      background-color: #0a192f;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .form-box {
      background-color: #112240;
      padding: 40px;
      border-radius: 16px;
      max-width: 600px;
      width: 100%;
      box-shadow: 0 0 20px rgba(100, 255, 218, 0.2);
    }
    h2 {
      color: #64ffda;
      text-align: center;
      font-size: 2em;
      margin-bottom: 30px;
    }
    label {
      display: block;
      margin-top: 20px;
      font-size: 1rem;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: none;
      margin-top: 8px;
      font-size: 1rem;
    }
    textarea {
      resize: vertical;
    }

    input[type="submit"] {
      margin-top: 30px;
      background-color: #64ffda;
      color: #0a192f;
      font-weight: bold;
      border: none;
      padding: 12px;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      font-size: 1.1rem;
    }
    input[type="submit"]:hover {
      background-color: #52e0c4;
    }
  </style>
</head>
<body>
  <div class="form-box">
    <h2>Course Enrollment</h2>
    <form action="courseenroll.php" method="POST">

      <label for="name">Full Name:</label>
      <input type="text" name="name" required>

      <label for="email">Email Address:</label>
      <input type="email" name="email" required>

      <label for="phone">Phone Number:</label>
      <input type="tel" name="phone" required pattern="[0-9]{10}" placeholder="10-digit number">


      <label for="dob">Date of Birth:</label>
      <input type="date" name="dob" required>

      <label for="course">Select Course:</label>
      <select name="course" required>
        <option value="">-- Choose a Course --</option>
        <option value="Web Development for Beginners">Web Development for Beginners</option>
        <option value="Data Science with Python">Data Science with Python</option>
        <option value="Foundation of Cybersecurity">Foundation of Cybersecurity</option>
        <option value="Mastering OOP with Java">Mastering OOP with Java</option>
        <option value="Mobile App Development with Flutter">Mobile App Development with Flutter</option>
        <option value="Introduction to Artificial Intelligence">Introduction to Artificial Intelligence</option>
        <option value="Machine Learning with Python">Machine Learning with Python</option>
        <option value="Cloud Computing">Cloud Computing</option>
        <option value="Blockchain Technology">Blockchain Technology</option>
        <option value="DevOps with Docker & Kubernetes">DevOps with Docker & Kubernetes</option>
        <option value="Internet of Things">Internet of Things</option>
        <option value="SQL for Everyone">SQL for Everyone</option>
      </select>

      <label for="batch_time">Preferred Batch Time:</label>
      <select name="batch_time" required>
        <option value="">-- Choose a Time --</option>
        <option value="Morning (8 AM - 10 AM)">Morning (8 AM - 10 AM)</option>
        <option value="Afternoon (12 PM - 2 PM)">Afternoon (12 PM - 2 PM)</option>
        <option value="Evening (6 PM - 8 PM)">Evening (6 PM - 8 PM)</option>
      </select>

      <input type="submit" value="Enroll Now">
    </form>
  </div>
</body>
</html>