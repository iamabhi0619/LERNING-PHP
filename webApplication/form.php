<?php
$con = mysqli_connect("localhost", "root", "", "mydb");
if (!$con) {
    die("Error connecting to SQL: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";

$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Something went wrong: " . mysqli_error($con);
} else {
    echo "Inserted successfully! <br> <a href='/'>Home</a>";
}
mysqli_close($con);
?>

