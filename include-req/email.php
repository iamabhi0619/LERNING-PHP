<?php

$email = $_POST['email'];
$email2 = "iamabhishek@gmail.com<script>alert('Hey how are you..!!!');</script>";
$s_email = filter_var($email, FILTER_SANITIZE_NUMBER_INT);
echo $email2;
echo $s_email;
?>