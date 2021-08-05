<?php
session_start();

if(!isset($_SESSION['studentSession']))
{
 header("Location: studentdashboard.php");
}
else if(isset($_SESSION['studentSession'])!="")
{
 header("Location: ../index.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['studentSession']);
 header("Location: ../index.php");
}
?>