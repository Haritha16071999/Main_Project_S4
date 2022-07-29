<?php
session_start();
$uid = $_SESSION['RID'];
if($uid==""){
  header("location:../../login-form-15/login.php");
}
?>
 <?php
 
include 'connection.php';
//$id=$_GET['s_id'];
//$sqli=mysqli_query($conn,"SELECT * FROM `tbl_schemesubmisssion` WHERE `schemesub1_id`='$id'");
//$row=mysqli_fetch_array($sqli);

$sqli1=mysqli_query($conn,"SELECT * FROM `tbl_register` WHERE login_id='$uid'");
$row1=mysqli_fetch_array($sqli1);
$sqli2=mysqli_query($conn,"SELECT * FROM `tbl_login` WHERE login_id='$uid'");
$row2=mysqli_fetch_array($sqli2);

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
          <li><a class="" href="aboutus.html">about us</a></li>
          <li><a href="viewservice.php">Service</a></li>
		  <li><a href="viewscheme.php">Schemes</a></li>
      <li><a href="Feedback.php">Feedback </a></li> 
      <li><a href="#">Contact Us  <li><a href="#"></a></li> 
		   <li><a href="login-form-15/login.php">Logout</a></li>
</nav>
</header>
</div>
</div>

 
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

<center><h3>User Details</h3></center>

<!--<div>
  <form action="feedback_action.php" method="post">
    <label for="fname">Give Feedback</label>
  <input type="text" id="fname" name="feedback" placeholder="Feedback">
    <textarea  type="text" name="feedback" rows="8" cols="160">
    </textarea><center>
  <input type="submit" value="Submit"></center>
  </form>
</div>-->
<div class="card-body">
                  <h4 class="card-title">Farmers details</h4>
                  
                  <form class="forms-sample" action="" method="post" >
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name ="name" value="<?php echo $row1['name'];?>" >
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" name="email" value="<?php echo $row2['email'];?>" >
                    </div>
                    <div class="form-group">
                      <label for="email">Date of Birth</label>
                      <input type="email" class="form-control" name="dob" id="dob" value="<?php echo $row1['dob'];?>" >
                    </div>
                    <div class="form-group">
                      <label for="password">Address</label>
                      <input type="text" class="form-control" value="<?php echo $row1['address'];?>" name="Address" >
                    </div>
                    <div class="form-group">
                      <label for="password">Gender</label>
                      <input type="text" class="form-control" value="<?php echo $row1['gender'];?>" name="Address" >
                    </div>
                    
                  
                    <div class="form-group">
                      <label for="Phonenumber">Aadhar number</label>
                      <input type="text" class="form-control" name="aadhar_no"value="<?php echo $row1['aadhar_no'];?>" >
                    </div>
                   
                    <div><button class="btn btn-warning" ><b>Update</b></div>
                  </form>
                  
                  <div>
                 </div>
                </div>




    