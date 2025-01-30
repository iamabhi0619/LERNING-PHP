<?php
$con = mysqli_connect("localhost", "root", "", "");
if (!$con) {
    echo "Error conneting to SQL";
}
if (!mysqli_select_db($con, "mydb")) {
    echo "Database not connected";
}
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user VALUES ('$name','$email','$password')";

$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Something went wrong";
} else {
    echo "Inserted sucessfully..!!";
}
