<?php

session_start();
if (isset($_SESSION["name"])){
    echo"Welcome ".$_SESSION["name"]." Session started";
}else{
    echo "Session not found";
}

session_destroy();