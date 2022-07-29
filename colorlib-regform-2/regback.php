<?php
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

   <script>
       function validateregform()
       {
        var name =uregistration.name;
        var aadhar_no =uregistration.aadhar_no;
        var address = uregistration.address;
        var email = uregistration.email;

        if(name.value == "")
        {
           window.alert("please enter your name");
           name.focus();
           return false;
        }
        if(aadhar_no.value == "")
         {
            window.alert("please enter your aadhar number");
            name.focus();
            return false;
         }
         if(aadhar_no.value.length!=12)
         {
            window.alert("please enter a valid aadhar number");
            name.focus();
            return false;
         }
         if(!/^[a-zA-Z]*$/g.test(name.value)){
            alert("please enter a valid  name characters");
            name.focus();
            return false;

         }
         if(!/^[a-zA-Z]*$/g.test(address.value)){
            alert("please enter a valid address characters");
            address.focus();
            return false;
         }
         return true;
       }
	   function validateemail()  
       {  
        var x=document.myform.email.value;  
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf(".");  
      if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
        alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
      return false;  
       }  
       }  
       function allletter(inputtxt)
       {
        var letters = /^[A-Za-z]+$/;
        if(inputtxt.value.match(letters))
        {
            return true;
        }
        else
        {
            return false;
        }
       }
   </script>

</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration </h2>
                    <form action="" method="POST" name="uregistration" onsubmit="return validateregform();s">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Name" name="name" required="" autocomplete="off">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                  <input type="date" name="dob" max="2022-01-29"> <label for="dob">DOB</label><br>
                                </div>
							
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
									     <label for="gender">Gender</label><br><br>
                                        Male <input type="radio" name="g" value="m"/>  
                                         Female <input type="radio" name="g" value="f"/>  
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						
						<div class="input-group">
                            <input class="input--style-2" type="number" placeholder="aadhar" name="aadhar_no" required="" autocomplete="off">
                        </div>
						<div class="input-group">
                            <input class="input--style-2" type="text" placeholder="email" name="email" required="" autocomplete="off">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="textarea" placeholder="address" name="address" required="" autocomplete="off">
                        </div>
                       
						<div class="input-group">
                            <input class="input--style-2" type="password" name="pwd" placeholder="password" id="pwd" required="" autocomplete="off">
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

</html>
