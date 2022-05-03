
    <?php
        require_once("ctop.php");
        ?>
        <!-- /. NAV TOP  -->
        <?php
        include("cmenu.php");
        ?>

<?php
include("../connection.php"); 

$ID = $_GET['id'];


	$result = mysqli_query($connection,"SELECT * FROM client WHERE ID= '$ID'");
	$row= mysqli_fetch_array($result);


?>
 
 <?php

if(isset($_POST['update'])){

$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];



	$query = "UPDATE client SET firstname='$firstname',lastname='$lastname',email='$email',phone='$phone',dob='$dob',gender='$gender',address='$address' where ID = '$ID'";
	$query_run = mysqli_query($connection,$query);

	if($query_run)
	{
		echo '<script type="text/javascript"> alert("Data Successfully Updated")
						window.location.assign("cprofile.php")
							 </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
	}
	}

?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color: green">Setting</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                                  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div style="color: red" class="panel-heading">
                          Update your Profile
                        </div>
                        <div class="panel-body">
                                    <form role="form"  method="POST" enctype="multipart/form-data">
                                     <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                           <input type="text" class="form-control"  name="firstname" value="<?php echo $row['firstname']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Last Name:</label>
                                           <input type="text" class="form-control"  name="lastname" value="<?php echo $row['lastname']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                          <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" class="form-control"  name="email" value="<?php echo $row['email']; ?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Phone Number:</label>
                                            <input type="text" class="form-control"  name="phone" value="<?php echo $row['phone']; ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Date of Birth:</label>
                                            <input type="date" class="form-control"  name="dob" value="<?php echo $row['dob']; ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                          <div class="form-group">
                                            <label>Gender:</label>
                                            <input type="text" class="form-control"  name="gender" value="<?php echo $row['gender']; ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                          <div class="form-group">
                                            <label>Address:</label>
                                            <input type="text" class="form-control"  name="address" value="<?php echo $row['address']; ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                        <input style="background-color: green" type="submit" name="update" value="Update" class="btn btn-primary">
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
