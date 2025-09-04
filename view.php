<?php
// view.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student_records";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registered Students</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Registered Students</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Department</th>
      <th>Matric No</th>
      <th>Action</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['fullname']."</td>
                <td>".$row['email']."</td>
                <td>".$row['department']."</td>
                <td>".$row['matricno']."</td>
                <td><a href='delete.php?id=".$row['id']."'><button class='delete-btn'>Delete</button></a></td>
              </tr>";
      }
    } else {
      echo "<tr><td colspan='6'>No students registered yet</td></tr>";
    }
    ?>
  </table>
  <br>
  <a href="index.php"><button>Register New Student</button></a>
</div>
</body>
</html>
<?php $conn->close(); ?>