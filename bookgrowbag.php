<?php
session_start();
include 'connection.php';
$uid = $_SESSION['RID'];
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
<?php
include 'connection.php';

$query ="SELECT  `details`, `quantity`, `amount` FROM `tbl_growbag` ";
$result=mysqli_query($conn,$query);

 ?>

 <?php
 while($row = mysqli_fetch_assoc($result)){

 
 ?>
 <br>

<!-- ---------------------------------------card --------------------------------------------------------->
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}


</style>

<br><br><br>    
<center>
<div class="card">
    <h2>GrowBag</h2>
    <img src="images/demo/backgrounds/g1.jpg" alt="" style="width:100%">
    <div class="container">
      <h4>  <b> <label><b>Details:</b>&nbsp;&nbsp;&nbsp;</label></h4><?php echo $row['details'] ?> </b><br><br>
      <h4>  <b> <label><b>No.of GrowBags :</b>&nbsp;&nbsp;&nbsp;</label></h4><?php echo $row['quantity'] ?> </b><br><br>
      <h4>  <b> <label><b>Amount:</b>&nbsp;&nbsp;&nbsp;</label></h4><?php echo $row['amount'] ?> </b><br>
        <p><a href="bagpay.php" class="btn btn-outline-primary">Book</a></center>  </p>
 </div>
 </div>            
</center>
<br><br><br><br>


<?php
 }
 ?>


    

	
	