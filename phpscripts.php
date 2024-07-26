<?php
$servername = "192.168.56.102";
$username = "mynk";
$password = "G23AI2069";
$dbname = "iitj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $course = $_POST['course'];

    $sql = "INSERT INTO Students (name, course) VALUES ('$name', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Course Registration Form</h2>
<form method="post">
  Name:<br>
  <input type="text" name="name" required>
  <br>
  Course:<br>
  <input type="text" name="course" required>
  <br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>