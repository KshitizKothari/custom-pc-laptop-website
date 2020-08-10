<?php
    session_start();
    if(!isset($_SESSION["idd"]))
        header("location:index.php");
    
?>