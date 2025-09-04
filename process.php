<?php
// process.php
$servername = "localhost";
$username = "root";   // change if needed
$password = "";       // change if needed
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = trim($_POST['fullname']);
  $email = trim($_POST['email']);
  $department = trim($_POST['department']);
  $matricno = trim($_POST['matricno']);

  if (empty($fullname) || empty($email) || empty($department) || empty($matricno)) {
    die("All fields are required!");
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format!");
  }

  $stmt = $conn->prepare("INSERT INTO student_records (fullname, email, department, matricno) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $fullname, $email, $department, $matricno);

  if ($stmt->execute()) {
    echo "<p>Student registered successfully!</p>";
    echo "<a href='index.php'>Register Another</a> | <a href='view.php'>View Students</a>";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
}
$conn->close();
?>