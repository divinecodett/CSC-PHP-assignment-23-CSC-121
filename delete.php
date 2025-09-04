<?php
// delete.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);
  $sql = "DELETE FROM student_records WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    header("Location: view.php");
    exit();
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}
$conn->close();
?>