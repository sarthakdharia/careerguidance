<?php
session_start();

if(!isset($_SESSION['counselorSession']))
{
 header("Location: counselordashboard.php");
}
else if(isset($_SESSION['counselorSession'])!="")
{
 header("Location: ../index.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['counselorSession']);
 header("Location: ../index.php");
}
?>