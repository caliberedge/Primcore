
<?php
require_once('top.php');

?>

                   <?php

                   include('menu.php');

                   ?>


<?php

$ID=$_SESSION["ID"];

if (isset($_POST['update']))
    {
    $old_pass = $_POST['cpassword'];
    $new_pass = $_POST['npassword'];
    $re_pass = $_POST['cnpassword'];
    $password_query = mysqli_query($connection,"select * from admin where ID='$ID'");
    $password_row = mysqli_fetch_array($password_query);
    $database_password = $password_row['password'];
    if ($database_password == $old_pass)
        {
        if ($new_pass == $re_pass)
            {
            $update_pwd = mysqli_query($connection,"update admin set password='$new_pass' where ID='$ID'");
            echo "<script>alert('Password Sucessfully Updated'); window.location='admin1.php'</script>";
            }
          else
            {
            echo "<script>alert('Your new and Retype Password is not match'); window.location='changepass.php'</script>";
            }
        }
      else
        {
        echo "<script>alert('Your old password is wrong'); window.location='changepass.php'</script>";
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
                           Change your Password
                        </div>
                        <div class="panel-body">
                            
			<div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                    <form role="form"  method="POST" enctype="multipart/form-data">
                                     
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control" placeholder="Enter password" name="cpassword">
                                        </div>
                                          <div class="form-group">
                                            <label>New password</label>
                                            <input type="password" class="form-control" placeholder="Enter password" name="npassword">
                                        </div>
                                          <div class="form-group">
                                            <label>Confirm New Password</label>
                                            <input type="password" class="form-control" placeholder="Enter password" name="cnpassword">
                                        </div>
                                        <input style="background-color: green" type="submit" name="update" value="Change password" class="btn btn-primary">
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
