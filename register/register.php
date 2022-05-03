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
    <title>Registration Form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>


<?php

if(isset($_POST['submit'])) {

$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$date = $_POST['date'];
$password = $_POST['password'];


$dbconnect=mysqli_connect('localhost','root','','primecore');

$user=mysqli_query($dbconnect,"SELECT * FROM admin where email='$email'");
$result=mysqli_num_rows($user);

if($result>0)
{
    echo '<script type="text/javascript"> alert("User with the email already exist") 
                    window.location.assign("register.php")
                                </script>';
}
else{
$user2=mysqli_query($dbconnect,"SELECT * FROM client where email='$email'");
$result2=mysqli_num_rows($user2);

if($result2>0)
{
    echo '<script type="text/javascript"> alert("User with the email already exist") 
                    window.location.assign("register.php")
                                </script>';
}

else{
$sql ="INSERT INTO client(firstname,lastname,email,phone,dob,gender,address,password) VALUES('$firstname','$lastname','$email','$phone','$date','$gender','$address','$password')";
$query_run = mysqli_query($dbconnect,$sql);

if($query_run) {
     
    echo '<script type="text/javascript"> alert("Congratulations you have successfully Registered, thanks!") 
                    window.location.assign("../login/login.php")
                                </script>';
    exit();
}else{
    echo "Submition Failed";
}
    }
}
}

?>

<script>
    function validateForm() {
 var z = document.forms["form"]["firstname"].value;
  if (z == "") {
    alert("Please Enter your Firstname");
    return false;
 }
  var t = document.forms["form"]["lastname"].value;
  if (t == "") {
    alert("Please Enter your Lastname");
    return false;
 }
  var x = document.forms["form"]["email"].value;
  if (x == "") {
    alert("Email can't be empty");
    return false;
  }
   var w = document.forms["form"]["phone"].value;
  if (w == "") {
    alert("Please Enter your phone number!");
    return false;
  }
  var p = document.forms["form"]["address"].value;
  if (p == "") {
    alert("Please Enter your Address!");
    return false;
  }
  var f = document.forms["form"]["gender"].value;
  if (f == "") {
    alert("Please Fill in your Gender!");
    return false;
  }
  var y = document.forms["form"]["password"].value;
  if (y == "") {
    alert("Password can't be empty");
    return false;
  }
}
</script>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <div class="col-md-3 col-lg-3 " align="left"> <img alt="User Pic" src="img/prime.png" width="180" height="50" class="img-circle img-responsive"> </div>
                    <h2 class="title">Welcome and Register with Us</h2>
                </div>
                <div class="card-body">
                    <form method="POST" name="form" onsubmit="return validateForm()">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="firstname">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lastname">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" placeholder="Enter email address" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="date" name="date">
                                            <label class="label--desc">Date of Birth</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Gender</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="address" placeholder="Enter current address" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="password">
                                            <label class="label--desc">Enter Password</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--green" name="submit" type="submit">Register</button>
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

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->