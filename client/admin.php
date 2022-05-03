        <!-- /. NAV TOP  -->
        <?php
        require_once("ctop.php");
        ?>
        <!-- /. NAV TOP  -->
        <?php
        include("cmenu.php");
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h3 style="color: purple"><marquee><img src="assets/img/primecore.png" width="120" height="30" alt="image"><i>'Primecore Global' is Happy to have You Around</i></marquee></h3>   
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
                        <form name="form" action="csearch_product.php" method="post" align="center" onsubmit="return validateForm()">
                            <label>Find Out if the Product is Gotten From Us</label>
                            <div>
                            <input type="search" name="search" class="form-control" placeholder="Enter Serial No." />
                            <button class="btn btn-success">Search Product</button>
                            </div>
                        </form>
          
          <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>



                    <div class="col-md-6" align="right">
                        <h5 style="color: green">.....Customer Care Services..... </h5>
                     <a href="../contact.php" class="btn btn-warning">Drop your Complaints or Message</a>
  
              <!--   <div class="col-md-6" align="left">
                          <br><br>
                     <a href="" class="btn btn-primary">Allocate to Students</a>
                 </div> -->  
                 </div>  <!--     <a href="laptop_reg.php" class="btn btn-primary">Register</a>
                        <a href="veiw.php" class="btn btn-success">View Product</a>
                        <a href="view_client.php" class="btn btn-warning">View Client</a>
                         <a href="view_contact.php" class="btn btn-info">Contact Messages</a>-->
                    <!--    <a href="#" class="btn
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
