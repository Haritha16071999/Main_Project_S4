<?php
include 'connection.php';
session_start();
$id=$_GET['uid'];
$uid = $_SESSION['RID'];
if($uid==""){
  header("location:../../login-form-15/login.php");
}
if(isset($_POST['submit'])){
  $fileName=$_FILES["img"]["name"];
  $targetDir="upload";
  //$targetDir="./corona-free-dark-bootstrap-admin-template-1.0.0/template/upload";
  $targetFilePath = $targetDir . $fileName; 
  move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath);
// $sql=mysqli_query($conn,"INSERT INTO `tbl_servicesubmission`( `document`) VALUES 
// ('$uid','$fileName')");

$sql = "INSERT INTO `tbl_schemesubmisssion`( `login_id`, `document`, `sts`, `scheme_id`) VALUES ('$uid','$fileName','pending','$id')";
$result = mysqli_query($conn,$sql);
if($result){
echo '<script>alert("Successfully Applied")</script>'; 
header('applyscheme.php');
}else{
    echo '<script>alert("Not success")</script>'; 
    header('applyscheme.php');  
}
?>
<?php
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
<?php
$id=$_GET['uid'];
$sql2= mysqli_query($conn,"SELECT * FROM `scheme` WHERE `scheme_id`='$id'");
$rows=mysqli_fetch_assoc($sql2);
?>
<body>

<center><h3><?php echo $rows['name'];?> </h3></center>


<div>

  <form action="" method="post" enctype="multipart/form-data">
  <label for="fname"></label>
  <!--  <input type="text" id="fname" name="feedback" placeholder="Feedback">-->
  <input type=text  placeholder="Upload required documents"  readonly />
 <input type= file  name="img" placeholder=" Upload required documents" />
    </textarea><center>
  <input type="submit"  name="submit" value="Submit"></center>
  </form>
</div>




    