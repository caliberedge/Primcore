
<?php
require_once('top.php');

?>

                   <?php

                   include('menu.php');

                   ?>

<?php
include("../connection.php");

$ID = $_GET['id'];


	$result = mysqli_query($connection,"SELECT * FROM admin WHERE ID= '$ID'");
	$row= mysqli_fetch_array($result);


?>
 
 <?php

if(isset($_POST['update'])){

$surname = $_POST['surname'];
$lastname =  $_POST['lastname'];
$email = $_POST['email'];



	$query = "UPDATE admin SET surname='$surname',lastname='$lastname',email='$email' where ID = '$ID'";
	$query_run = mysqli_query($connection,$query);

	if($query_run)
	{
		echo '<script type="text/javascript"> alert("Data Successfully Updated")
						window.location.assign("admin1.php")
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
                                            <label>Surname:</label>
                                           <input type="text" class="form-control"  name="surname" value="<?php echo $row['surname']; ?>">
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
                                            <input type="text" class="form-control"  name="email" value="<?php echo $row['email']; ?>" >
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
