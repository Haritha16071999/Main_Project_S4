<?php
session_start();
include 'connection.php';
include ('noti.php');

$uid = $_SESSION['RID'];
if($uid==""){
  header("location:../../login-form-15/login.php");
}

$sql="SELECT * FROM tbl_guideline";
$result= mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
  $alertmsg = $row['guide_name'];
  $date = $row['date'];
  $place = $row['place'];
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
    <div>
      <marquee behavior="" direction="" style="background-color: rgba(148, 186, 236,0.7); border-bottom-left-radius:10px; border-top-left-radius; width:20px height:10px;" >The Guideline class in &numsp;<?php echo $alertmsg;?> &numsp;Date on &numsp; <?php echo $date;?>&numsp; Venu at &numsp; <?php echo $place?></marquee>
</div>
      <nav id="mainav" class="clear"> 
        <ul class="clear">
          <li class="active"><a href="user.php">Home</a></li>
          <li><a class="" href="aboutus.php">About us</a></li>
          <li><a href="viewservice.php">Service</a></li>
		      <li><a href="viewscheme.php">Schemes</a></li>
      <li><a href="Feedback.php">Feedback </a></li> 
      <li><a href="userprofile.php">Profile</a></li> 
      <li><a href="userfield.php">Field Response </li>
      <li><a href="bookgrowbag.php">Book GrowBag </li>
      <li><a href="login-form-15/login.php">Logout</a></li>
          <!--<li><a href="colorlib-regform-2/registration.php">Sign Up</a></li>-->
        </ul>
      </nav>
      <div id="logo"> 
        <h1><a href="index.html">Agro-world</a></h1>
        
        <!-- ################################################################################################ -->
      </div>
    </header>
  </div>
 
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <div class="">
      
      </div>
      <footer>
   
      </footer>
    </article>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="center btmspace-50">
      <h2 class="heading">Agro-world</h2>
      <p>
Is the practice of cultivating plants and livestock and the key development in the rise of sedentary human civilization.</p>
    </div>
    
    <div class="clear"></div>
  </main>
</div>
    
    <ul class="nospace group">
      <li class="one_half first">
        
      </li>
      <li class="one_half"> </li>
    </ul>
  </section>
</div>
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="center btmspace-50">
      <h2 class="heading">Farmer's Growth</h2>
      <p>Farmer's can build their own creations and learn new cultivations</p>
    </div>
    <ul class="nospace elements">
      <li class="one_third first">
        <article><a href="#"><img src="images/demo/backgrounds/A1.jpg" alt=""></a>
          <div class="txtwrap">
            <h6 class="heading">Fielding</h6>
            <!--<time datetime="2045-04-06">6<sup>th</sup> April 2045</time>-->
            <p>visiting farmer's sites </p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><img src="images/demo/A2.jpg" alt=""></a>
          <div class="txtwrap">
            <h6 class="heading">Hybrid plants growth</h6>
            <p>Hybrid and tissue culture plants formation;</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><img src="images/demo/A3.jpg" alt=""></a>
          <div class="txtwrap">
            <h6 class="heading">Guideline classes</h6>
            <p>Teach farmer's to develop their own ideas</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
    </ul>
  </section>
</div>
<div class="wrapper coloured">
  <div class="hoc clear"> 
    <figure id="logos">
      <ul class="nospace group">
        
      </ul>
      <figcaption class="hidden"><a class="btn small" href="#">More &raquo;</a></figcaption>
    </figure>
  </div>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      <h6 class="title">Contact Us</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          AgroWorld &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890<br>
          +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> agroworld@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      
    </div>
    <div class="one_quarter">
      <h6 class="title"></h6>
      <p class="btmspace-30"></p>
      <form method="post" action="#">
        <fieldset>
          <legend></legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit"></button>
        </fieldset>
      </form>
    </div>
    <div class="one_quarter">
      <h6 class="title"></h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#"></a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06"><sup></sup></time>
            <p class="nospace"></p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#"></a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05"><sup></sup></time>
            <p class="nospace"></p>
          </article>
        </li>
      </ul>
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy;  <a href="#">Agro-world</a></p>
    <p class="fl_right"> <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates"></a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
<?php
