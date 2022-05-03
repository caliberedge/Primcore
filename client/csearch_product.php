    <?php
        require_once("ctop.php");
        ?>
        <!-- /. NAV TOP  -->
        <?php
        include("cmenu.php");
        ?>

<?php 
include("../connection.php");
$sql = $_POST['search'];
$show="SELECT * FROM product where serial_no like '$sql'";
$result=mysqli_query($connection, $show);

if ($rows=mysqli_fetch_array($result)) {

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js" integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    
         <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"><i>Primecore Global is Hoping to See You Again</i></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="col-md-6">
                <a align="right" href="allocate_product.php?id=<?php echo $rows['ID'];?>" class="btn btn-info">Allacate to Student</a>
                <button class="btn btn-default" id="exportPDF">Download PDF</button>
            </div>

            <div id="html2pdf" style="display: block; ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       <div class="panel-body"><br>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Thank You Our Dear Esteem Customer for Patronizing Us.</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="assets/img/primecore.png" width="150" height="100"> </div>
                
            
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                        <tr>
                        <td>Serial No:</td>
                        <td><?php echo $rows['serial_no']?></td>
                      </tr>
                     <tr>
                        <td>Manufacturer:</td>
                        <td>
                        <?php echo $rows['manufacturer']?>
                    	</td>
                      </tr>
                     <tr>
                        <td>Product ID:</td>
                        <td><?php echo $rows['product_id']?></td>
                      </tr>
                      <tr>
                        <td>Model:</td>
                        <td><?php echo $rows['model']?></td>
                      </tr>
                       <tr>
                        <td>Sold To:</td>
                        <td><?php echo $rows['sold']?></td>
                      </tr>
                       
                      <tr>
                        <td>Date Bought:</td>
                        <td><?php echo $rows['date']?></a></td>
                    <!--    <a href="mailto:luckyenoch_abk@deeperlifehighschool.org">-->
                      </tr>
                      <tr>
                        <td>Student Allocated To:</td>
                        <td><?php echo $rows['student']?></td>
                      </tr>
                    <!--  <tr>
                        <td></td>
                    <th>  
                     <a href="allocate_product.php?id=<?php echo $rows['ID'];?>" class="btn btn-primary">Allacate to Student</a>
                     </th>
                     </tr>-->
                    </body>
                  </table>
                  

<?php

}else{
  echo '<script type="text/javascript"> alert("Sorry No Record Found For this Search") 
                    window.location.assign("admin.php")
                                </script>';
}

?>

                  
           
                </div>
              </div>
            </div>
           </div>
           </div> 
          </div>
          
        </div>

   

<script>
let htmlPDF = document.getElementById("html2pdf");
let exportPDF = document.getElementById("exportPDF");
exportPDF.onclick = (e) => html2pdf(htmlPDF);
</script>

                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        </div>
        <!-- /#page-wrapper -->


</body>
</html>