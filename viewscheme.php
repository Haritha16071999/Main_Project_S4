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
include 'connection.php';

$query ="select * from scheme";
$result=mysqli_query($conn,$query);
 ?>
 



    <table algin="center" border="1px"   style="padding:20px; background-color: rgba(252, 233, 128, 0.7); border-top-right-radius: 10px; border-bottom-right-radius: 10px;">

	
	<tr>
	<h2>Scheme</h2>
	<!--<th>id</th>-->
	<th>SCHEME NAME</th>
	<th>SCHEME DESCIPTION</th>
	<th>START DATE</th>
	<th>END DATE</th>
	<th>DOCUMENT</th>
	<th>QUALIFICATION</th>
	<th>FIELD REQUEST</th>

	
	</tr>
	
	<?php
	while($rows=mysqli_fetch_assoc($result))
	{
		$ser = $rows['scheme_id'];
		$count=0;
		  $qw = mysqli_query($conn,"SELECT * FROM `tbl_schemesubmisssion` where scheme_id='$ser' and login_id='$uid'");
		  if(mysqli_num_rows($qw)>0){
			$count=1;
			$qe = mysqli_fetch_assoc($qw);
			$qr = $qe['reply'];
			$qe = $qe['sts'];
		  }
		?>
		<tr>	
		
        <td><?php echo $rows['name']; ?></td>
		<td><?php echo $rows['schemedescription']; ?></td>
		<td><?php echo $rows['startdate']; ?></td>
		<td><?php echo $rows['enddate']; ?></td>
		<td><a href="corona-free-dark-bootstrap-admin-template-1.0.0/template/upload/<?php echo $rows['document']; ?>"><?php echo $rows['document']; ?></a></td>
		<td><?php echo $rows['qualification']; ?></td>
		<?php if ($count==1) { ?>
			<td><b><?php if($qe=='rejected'){ echo  "(".$qe.") ".$qr; }else { echo $qe; } ?></b></td>
		<?php }else{ ?>
		<td><a href="applyscheme.php?uid=<?php echo $rows['scheme_id']; ?>"><button>Field request</button></a></td>
		<?php } ?>
	<?php
	}
	?>
		
	</table>
	

	
	