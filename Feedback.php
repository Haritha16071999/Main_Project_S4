<?php
session_start();
$uid = $_SESSION['RID'];
if($uid==""){
  header("location:../../login-form-15/login.php");
}
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Agro-world</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/b1.jpg');"> 
  <div class="wrapper overlay">
    <header id="header" class="hoc clear">
      <nav id="mainav" class="clear"> 
        <ul class="clear">
          <li class="active"><a href="user.php">Home</a></li>
          <li><a class="" href="homedetails.php">about us</a></li>
          <li><a href="viewservice.php">Service</a></li>
		  <li><a href="viewscheme.php">Schemes</a></li>
      <li><a href="Feedback.php">Feedback </a></li> 
      <li><a href="#">Contact Us  <li><a href="#"></a></li> 
		   <li><a href="login-form-15/login.php">Logout</a></li>
</nav>
</header>
</div>
</div>
<?php
include 'connection.php';

$query ="select * from tbl_feedback";
$result=mysqli_query($conn,$query);
 ?>
 
 <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<center><h3>Feedback</h3></center>

<div>
  <form action="feedback_action.php" method="post">
    <label for="fname">Give Feedback</label>
  <!--  <input type="text" id="fname" name="feedback" placeholder="Feedback">-->
    <textarea  type="text" name="feedback" rows="8" cols="160">
    </textarea><center>
  <input type="submit" value="Submit"></center>
  </form>
</div>




    