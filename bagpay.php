<?php
session_start();
include 'connection.php';
$uid = $_SESSION['RID'];
$apikey="rzp_test_FNtafJNzIFWgDL";
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
         <li><a href="#">Contact Us  <li><a href="#"></a></li> 
		   <li><a href="login-form-15/login.php">Logout</a></li></ul>
</nav>
</header>
</div>
</div>


<!-- ---------------------------------------card --------------------------------------------------------->
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

<center><h3>Payment</h3></center>

<div>
<center><form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jq7Hzm5wiJOKGo" async> </script> </form></center>
</div>




    

	
	