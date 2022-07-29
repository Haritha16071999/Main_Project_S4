<?php

session_start();

include 'connection.php';
if (isset($_POST['register'])) {
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['g'];
    $aadhar_no=$_POST['aadhar_no'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $password=$_POST['pwd'];
	

    $sq = mysqli_query($conn,"INSERT INTO `tbl_login`( `email`, `password`) VALUES ('$email','$password') ");

    $login_id=mysqli_insert_id($conn);

    $sql=mysqli_query($conn,"INSERT INTO `tbl_register`( `login_id`, `name`, `address`, `dob`, `gender`, `aadhar_no`) VALUES ('$login_id','$name','$address','$dob','$gender','$aadhar_no')");

    header('registration.php');

    echo '<script>alert("Successfully Registered")</script>'; 
   

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
   
   










</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration </h2>
                    <form action="" method="POST" name="reg_form" >
                        <div class="input-group">
                        <input type="text" class="form-control" name="name" id = "name" title="Start with a Capital letter & Only alphabets without space are allowed!!" placeholder="Name*" value = "" required onchange="Val();"><span id = "charMsg" style="color:red"> </span>
              <script>    
function Val()
{
    var val = document.getElementById('name').value;

    if (!val.match(/^[A-Z][A-Za-z]{0,}$/))
    {
        document.getElementById('charMsg').innerHTML="Start with a Capital letter & Only alphabets are allowed!!";
                document.getElementById('name').value = "";
        return false;
    }
document.getElementById('charMsg').innerHTML=" ";
    return true;
}
</script>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                  <input type="date" name="dob" min ="1967-01-30" max="2004-01-31"> <label for="dob">DOB</label><br>
                                </div>
							
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
									     <label for="gender">Gender</label><br><br>
                                        Male <input type="radio" name="g" value="Male"/>  
                                         Female <input type="radio" name="g" value="Female"/>  
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						
						<div class="input-group">
                            <input class="input--style-2"  placeholder="aadhar" name="aadhar_no" id="aadhar_no" required="" autocomplete="off"   
                             onchange="return Valiaadhar();">
                            <span id="msg14" style="color:red;"></span>


<script> 
function Valiaadhar(){ 
var regexp = /^[2-9]{1}[0-9]{3}\s[0-9]{4}\s[0-9]{4}$/; 
var ano = document.getElementById("aadhar_no").value; 

if(regexp.test(ano)) { 
console.log("Valid Aadhaar Number"); 
return true; 
}else{ 
console.log("Invalid Aadhaar Number"); 
 return false; 
} } 
</script>

                        </div>
 

						<div class="input-group">
                        <input type="text" class="form-control" name="email" id="email" title="Enter a Valid Email" placeholder="your email*" required onchange="return Validata();"
                        /><span id="msg15" style="color:red;"></span>
                        <script>    
function Validata()
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/))
    {
        document.getElementById('msg15').innerHTML="Enter a Valid Email";
   
         document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg15').innerHTML=" ";
    return true;
}
</script>                       </div>
                        <div class="input-group">
                            <input class="input--style-2" type="textarea" placeholder="address" name="address" id= "address"  required="" autocomplete="off"    onchange="return Valadrs1();"/>
                            <span id="ad1" style="color:red;"></span>
                            <script>    
                    function Valadrs1()
                    {
                    var val = document.getElementById('address').value;

                    if (!val.match(/^[A-Z][A-Za-z]{2,}$/))
                    {
                        document.getElementById('ad1').innerHTML="Please Start With Capital Letter,& only alphabets are allowed";
   
                        document.getElementById('address').value = "";
                        return false;
                    }
                    document.getElementById('ad1').innerHTML=" ";
                    return true;
                    }
                    </script>
                        </div>
                       
						<div class="input-group">
                            <input class="input--style-2" type="password" name="pwd"  id="pwd" placeholder="password" id="pwd" required=""  title="**Password must be at least 6 characters long."  autocomplete="off"  onsubmit="return Valipswd();">
                            <span id="msg9" style="color:red;"></span>
                            <script>    
function Valipswd()
{
    var val = document.getElementById('pwd').value;

    if (!val.match(/^[A-Za-z0-9!-*]{6,15}$/))
    {
        document.getElementById('msg9').innerHTML="Password should contain atleast 6 characters";
   
         document.getElementById('pwd').value = "";
        return false;
    }
document.getElementById('msg9').innerHTML=" ";
    return true;
}

</script>
                        </div>
						
						
						
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit"name="register" value="register" >Submit</button>
                        </div>
                        <div class="p-t-30">
                            <p style="color:black; margin:0;"> Already have an account? &nbsp; <a href="../login-form-15/login.php" style="color:blue;">Sign In</a><br><br></p>
                            </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
	

</body>      <!-- This templates was made by Colorlib (https://colorlib.com) -->


<script>
    $(document).ready(function(){

    })



</html>
