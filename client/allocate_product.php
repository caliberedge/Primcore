<?php
require_once('ctop.php');
?>

<?php
include('cmenu.php');
?>


<?php
include("../connection.php");

$ID = $_GET['id'];


  $result = mysqli_query($connection,"SELECT * FROM product WHERE ID= '$ID'");
  $row= mysqli_fetch_array($result);


?>
 
 <?php

if(isset($_POST['update'])){

$serial_no = $_POST['serial_no'];
$manufacturer =  $_POST['manufacturer'];
$product_id = $_POST['product_id'];
$model = $_POST['model'];
$sold = $_POST['sold'];
$date_supplied= $_POST['date_supplied'];
$supply=$_POST['student_supplied'];



  $query = "UPDATE product SET serial_no='$serial_no',manufacturer='$manufacturer',product_id='$product_id',sold='$sold',date='$date_supplied',student='$supply' where ID = '$ID'";
  $query_run = mysqli_query($connection,$query);

  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Product Successfully Allocated to the Student")
            window.location.assign("admin.php")
               </script>';
  }
  else
  {
    echo '<script type="text/javascript"> alert("Product Not Updated") </script>';
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
                    <h2 class="page-header" style="color: green">Student Allocation Page</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                                  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div style="color: red" class="panel-heading">
                          Product Info.
                        </div>
                        <div class="panel-body">
                                    <form role="form" name="form" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
                                     <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Serial No.:</label>
                                           <input type="text" class="form-control"  name="serial_no" value="<?php echo $row['serial_no']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Manufacturer:</label>
                                           <input type="text" class="form-control"  name="manufacturer" value="<?php echo $row['manufacturer']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-4">
                                          <div class="form-group">
                                            <label>Product ID:</label>
                                            <input type="text" class="form-control"  name="product_id" value="<?php echo $row['product_id']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Model:</label>
                                            <input type="text" class="form-control"  name="model" value="<?php echo $row['model']; ?>"readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-4">
                                          <div class="form-group">
                                            <label>Sold To:</label>
                                            <input type="text" class="form-control"  name="sold" value="<?php echo $row['sold']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Date Bought:</label>
                                            <input type="date" class="form-control"  name="date_supplied" value="<?php echo $row['date']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                          <div class="form-group">
                                            <label>Student Allocated To:</label>
                                            <input type="text" class="form-control"  name="student_supplied" value="<?php echo $row['student']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                        <input style="background-color: blue" type="submit" name="update" value="Allocate" class="btn btn-primary">
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
