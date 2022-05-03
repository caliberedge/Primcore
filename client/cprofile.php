
           <?php
        require_once("ctop.php");
        ?>
        <!-- /. NAV TOP  -->
        <?php
        include("cmenu.php");
        ?>


          <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">My Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       <div class="panel-body">
      <div class="col-md-3  toppad  pull-right col-md-offset-2 ">
<!--<p class=" text-info">Today: Sep/30/2020  12:16:14 </p>-->
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $row['firstname']. " " .$row['lastname'] ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="assets/img/primecore.png" width="120" height="100" class="img-circle img-responsive"> </div>
                
            
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                        <tr>
                        <td>Name:</td>
                        <td><?php echo $row['firstname']. " " .$row['lastname'] ?></td>
                      </tr>
                     <tr>
                        <td>Gender:</td>
                        <td>
                        <?php echo $row['gender']?>
                        </td>
                      </tr>
                     <tr>
                        <td>Date Of Birth:</td>
                        <td><?php echo $row['dob']?></td>
                      </tr>
                      <tr>
                        <td>Phone Number:</td>
                        <td><?php echo $row['phone']?></td>
                      </tr>
                         <tr>
                             <tr>
                        <td>Address:</td>
                        <td><?php echo $row['address']?></td>
                      </tr>
                       
                      <tr>
                        <td>Email:</td>
                        <td style="color: blue"><?php echo $row['email']?></a></td>
                    <!--    <a href="mailto:luckyenoch_abk@deeperlifehighschool.org">-->
                      </tr>
                       
                     
                    </body>
                  </table>
                  
           
                </div>
              </div>
            </div>
             
            
          </div>
        </div>
      
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    
