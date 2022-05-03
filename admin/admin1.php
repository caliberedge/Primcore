        <?php
        require_once("top.php");
        ?>
        <!-- /. NAV TOP  -->
        <?php
        include("menu.php");
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="color: purple"><marquee><img src="assets/img/primecore.png" width="120" height="30" alt="image"><i> C.E.O's Dashboard: 'Primecore Global'.....(<i style="color: red">Adding Values</i>)</i></marquee></h3>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>Food for thought 1</h5>
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                                <h3>120 GB </h3>
                                If You Can't Fly, Run. If You Can't Run, Walk. If Can't Walk, Craw. But By All means Keep Moving...
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>Food for thought 2</h5>
                        <div class="alert alert-info text-center">
                            <i class="fa fa-desktop fa-5x"></i>
                            <h3>100$ </h3>
                            Result Happen Over Time, Not Overnight. Pray Hard, Work Hard, Stay Consistent, And Be Patient...
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5> Simple Product Action </h5>
                   <!--     <a href="#" class="btn btn-default">default</a>-->
                        <a href="laptop_reg.php" class="btn btn-primary">Register</a>
                        <a href="veiw.php" class="btn btn-success">View Product</a>
                        <a href="view_client.php" class="btn btn-warning">View Client</a>
                         <a href="view_contact.php" class="btn btn-info">Contact Messages</a>
                    <!--    <a href="#" class="btn btn-danger">danger</a>-->
                        <br />
                        <br />
                        <h5> Actions Progressbar </h5>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /. ROW  -->
                <hr />


                <script>
    function validateForm() {
  var x = document.forms["form"]["search"].value;
  if (x == "") {
    alert("Please type out the Serial No. to be searched!");
    return false;
  }
}
</script>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <form name="form" action="search_product.php" method="post" onsubmit="return validateForm()">
                            <label>Find a Product by Serial No.</label>
                            <div>
                            <input type="search" name="search" class="form-control" placeholder="Enter Serial No." />
                            <button class="btn btn-success">Search Product</button>
                            </div>
                        </form>

                            
                        </div>
                    </div>
                    <div class="col-md-4">
                    <form name="form" action="search_client.php" method="post">
                        <label>Search Out a Client by Email Address</label>
                         <input type="search" name="search" class="form-control" placeholder="Enter Email Address" />
                            <button class="btn btn-warning">Search Client</button>
                    </form>
                    </div>
                </div>
                <hr />
               
                    


                
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
