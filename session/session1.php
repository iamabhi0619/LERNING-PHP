<?php
session_start();
$_SESSION['name'] = 'Abhishek';
echo $_SESSION['name'];

$id = session_id();

echo'Session ID:- '.$id.'\n';
echo 'Session started..!!!';

?>
