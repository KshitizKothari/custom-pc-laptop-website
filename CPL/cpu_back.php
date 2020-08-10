<?php
session_start();
if(!isset($_SESSION["idd"]))
    header("location:index.php");
    $_SESSION["gc_price"]=$_POST["gc"];
    $_SESSION["ssd_price"]=$_POST["ssd"];
    $_SESSION["pro_price"]=$_POST["pro"];
    $_SESSION["gc_price"]=$_POST["hdd"];
    $_SESSION["ram_price"]=$_POST["ram"];

?>