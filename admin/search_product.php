
<?php
require_once('top.php');
?>

<?php
include('menu.php');
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color: green">PRODUCTS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                                  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div style="color: blue" class="panel-heading">
                    	Searched Product
                        </div>
                        <div class="panel-body">
 <body>                       	
<table border="2" align="center">
	<tr>
		<th>Serial No</th>
		<th>Manufacturer</th>
		<th>Product ID</th>
		<th>Model</th>
		<th>Supplier</th>
		<th>Sold To</th>
		<th>Date Sold</th>
		<th>Student Allocated To</th>
		<th colspan="2" align="center">Action</th>
	</tr>
<?php 
include("../connection.php");
$sql = $_POST['search'];
$show="SELECT * FROM product where serial_no like '$sql'";
$result=mysqli_query($connection, $show);
if ($rows=mysqli_fetch_array($result)) {
?>
	<tr>
	<td>
	<?php echo $rows["serial_no"];?>
	</td>
	<td>
	<?php echo $rows["manufacturer"]; ?>
	</td>
	<td>
	<?php echo $rows["product_id"]; ?>
	</td>
	<td>
	<?php echo $rows["model"]; ?>
	</td>
	<td>
	<?php echo $rows["supply"]; ?>
	</td>
	<td>
	<?php echo $rows["sold"]; ?>
	</td>
	<td>
	<?php echo $rows["date"]; ?>
	</td>
	<td>
	<?php echo $rows["student"]; ?>
	</td>
	<th>	
		<a href="update_product.php?id=<?php echo $rows['ID'];?>"style="color: green">Update</a>
	</th>
	<th>
	<a href="delete.php?id=<?php echo $rows['ID'];?>"  onclick="return confirm('Are You Sure, You Want to Remove this Record?');" style="color: red">Delete</a>
	</th>
	</tr>
	<?php

}else{
	echo '<script type="text/javascript"> alert("Sorry No Record Found For this Search") 
                    window.location.assign("admin1.php")
                                </script>';
}
?>
</table>
</body>
