<?php
require_once('top.php');
?>

<?php
include('menu.php');
?>

<?php

if(isset($_POST['register'])) {

$serial_no = mysqli_real_escape_string($connection,$_POST['serial_no']);
$manufacturer = mysqli_real_escape_string($connection,$_POST['manufacturer']);
$product_id = mysqli_real_escape_string($connection,$_POST['product_id']);
$model = mysqli_real_escape_string($connection,$_POST['model']);
$supply= mysqli_real_escape_string($connection,$_POST['supply']);
$sold= mysqli_real_escape_string($connection,$_POST['sold']);
$date_supplied= mysqli_real_escape_string($connection,$_POST['date_supplied']);


$user=mysqli_query($connection,"SELECT * FROM product where serial_no='$serial_no'");
$result=mysqli_num_rows($user);

if($result>0)
{
    echo '<script type="text/javascript"> alert("Product with this Serial No. already exist") 
                    window.location.assign("laptop_reg.php")
                                </script>';
}
else{

$sql=mysqli_query($connection,"INSERT INTO product(serial_no,manufacturer,product_id,model,supply,sold,date) values('$serial_no','$manufacturer','$product_id','$model','$supply','$sold','$date_supplied')");
if($sql) {
    echo '<script type="text/javascript"> alert("Product Successfully Registered, thanks") 
                    window.location.assign("laptop_reg.php")
                                </script>';
    exit();
}
else{
    echo "Submition Failed";
}
  }
  }
?>

<script>
    function validateForm() {
     var z = document.forms["form"]["serial_no"].value;
  if (z == "") {
    alert("Sorry serial No. can't be empty");
    return false;
 }
  var x = document.forms["form"]["manufacturer"].value;
  if (x == "") {
    alert("Sorry Manufacturer can't be empty");
    return false;
  }
  var y = document.forms["form"]["product_id"].value;
  if (y == "") {
    alert("Product ID can't be empty");
    return false;
  }
    var w = document.forms["form"]["model"].value;
  if (w == "") {
    alert("Model can't be empty");
    return false;
  }
  var t = document.forms["form"]["supply"].value;
  if (t == "") {
    alert("Supplier can't be empty");
    return false;
  }
  var p = document.forms["form"]["sold"].value;
  if (p == "") {
    alert("Sold To can't be empty");
    return false;
  }
  var w = document.forms["form"]["date_supplied"].value;
  if (w == "") {
    alert("Date Supplied can't be empty");
    return false;
  }
}

</script>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color: green">ADD TO ARCHIVE</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                                  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div style="color: red" class="panel-heading">
                         Register Product
                        </div>
                        <div class="panel-body">
                                    <form role="form" name="form" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
                                     <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Serial No.:</label>
                                           <input type="text" class="form-control"  name="serial_no" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Manufacturer:</label>
                                           <input type="text" class="form-control"  name="manufacturer" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-4">
                                          <div class="form-group">
                                            <label>Product ID:</label>
                                            <input type="text" class="form-control"  name="product_id" value="" >
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Model:</label>
                                            <input type="text" class="form-control"  name="model" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Supplier:</label>
                                            <input type="text" class="form-control"  name="supply" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Sold To:</label>
                                            <input type="text" class="form-control"  name="sold" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Date Sold:</label>
                                            <input type="date" class="form-control"  name="date_supplied" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                        <input style="background-color: blue" type="submit" name="register" value="Register" class="btn btn-primary">
                                    </div>
                                </div>
                                    </form>
                        </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
                <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
