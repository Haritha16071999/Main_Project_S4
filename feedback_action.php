<?php
include'connection.php';
session_start();
$a=$_SESSION['RID'];
   $f=$_POST['feedback'];
    $d=date("Y-m-d");
    
    $sql=mysqli_query($conn,"INSERT INTO `tbl_feedback`(`login_id`, `f_date`, `f_msg`, `f_status`) VALUES ('$a','$d','$f','1')");
    header("location:Feedback.php");


?>