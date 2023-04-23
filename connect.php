<?php
// Connect to database
$conn = mysqli_connect('localhost','root', '', 'loginpage');
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$fullname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO login (username,email,password)
VALUES ('$fullname', '$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Your Account created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>