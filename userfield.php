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
<table algin="center" border="1px"   style="padding:20px; background-color: rgba(252, 233, 128, 0.7); border-top-right-radius: 10px; border-bottom-right-radius: 10px;">

	
<tr>
<h2>View Confirmation</h2>
<!--<th>id</th>-->
<th>Date</th>
<th>Comments</th>




</tr>
<?php
include 'connection.php';

$query ="select * from  tbl_fieldrequest";
$result=mysqli_query($conn,$query);


while($rows=mysqli_fetch_assoc($result))
{

 ?>
 



   

		<tr>	
		
        <td><?php echo $rows['date']; ?></td>
		<td><?php echo $rows['comment']; ?></td>
		
		
	<?php
}
	?>
		
	</table>
	

	
	