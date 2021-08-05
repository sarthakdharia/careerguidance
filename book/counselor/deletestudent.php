<?php
include_once '../assets/conn/dbconnect.php';
// Get the variables.
$email = $_POST['ic'];
// echo $appid;

$delete = mysqli_query($con,"DELETE FROM student WHERE email=$email");
// if(isset($delete)) {
//    echo "YES";
// } else {
//    echo "NO";
// }



?>

