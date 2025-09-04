<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Student Registration Form</h2>
    <form action="process.php" method="POST">
      <label for="fullname">Full Name</label>
      <input type="text" name="fullname" id="fullname" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>

      <label for="department">Department</label>
      <input type="text" name="department" id="department" required>

      <label for="matricno">Matric Number</label>
      <input type="text" name="matricno" id="matricno" required>

      <input type="submit" value="Register">
    </form>
    <br>
    <a href="view.php"><button>View Registered Students</button></a>
  </div>
</body>
</html>