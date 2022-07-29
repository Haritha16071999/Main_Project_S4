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
          <li><a class="" href="homedetails.php">about us</a></li>
          <li><a href="viewservice.php">Service</a></li>
		  <li><a href="viewscheme.php">Schemes</a></li>
         <li><a href="#">Contact Us  <li><a href="#"></a></li> 
		   <li><a href="login-form-15/login.php">Logout</a></li></ul>
</nav>
</header>
</div>
</div>
<?php
$query ="select * from tbl_service";
$result=mysqli_query($conn,$query);
 ?>
    <table algin="center" border="1px"   style="padding:20px; background-color: rgba(252, 233, 128, 0.7); border-top-right-radius: 10px; border-bottom-right-radius: 10px;"><tr>
	<t>
	<h2>Services</h2>
	<!--<th>id</th>-->
	<th>SERVICE NAME</th>
	<th>SERVICE DESCIPTION</th>
	<th>START DATE</th>
	<th>END DATE</th>
	<th>DOCUMENT</th>
	<th>QUALIFICATION</th>
	<th>Apply</th>
	</t>
	
	<?php
	while($rows=mysqli_fetch_assoc($result))
	{
		$ser = $rows['service_id'];
		$count=0;
		  $qw = mysqli_query($conn,"SELECT * FROM `tbl_servicesubmission` where service_id='$ser' and login_id='$uid'");
		  if(mysqli_num_rows($qw)>0){
			$count=1;
			$qe = mysqli_fetch_assoc($qw);
			$qr = $qe['reply'];
			$qe = $qe['sts'];
		  }
		?>
		<tr>
		<!--<td><?php echo $rows['service_id']; ?></td>-->
        <td><?php echo $rows['name']; ?></td>
		<td><?php echo $rows['servicedescription']; ?></td>
		<td><?php echo $rows['startdate']; ?></td>
		<td><?php echo $rows['enddate']; ?></td>
        <td><a href="corona-free-dark-bootstrap-admin-template-1.0.0/template/upload/<?php echo $rows['document']; ?>"><?php echo $rows['document']; ?></a></td>
		<td><?php echo $rows['qualification']; ?></td>
		<?php if ($count==1) { ?>
			<td><b><?php if($qe=='Rejected'){ echo  "(".$qe.") ".$qr; }else { echo $qe; } ?></b></td>
		<?php }else{ ?>
		<td><a href="applyservice.php?id=<?php echo $rows['service_id']; ?>"><button>Apply</button></a></td>
		<?php } ?>
		</tr>
	</tr>
	
	<?php
	}
	?>
	</table>