<?php
    session_start();
    unset($_SESSION["uName"]);
    unset($_SESSION['name']);
    unset($_SESSION["view"]);
    header("Location:index.php");
?>