
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
                    	See Availabe Product
                        </div>
                        <div class="panel-body">
<table border="2" align="center">
	<tr>
		<th>S/N</th>
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

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }

        $total_records_per_page = 20;

        $offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query(
$connection,
"SELECT COUNT(*) As total_records FROM product"
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1

$result = mysqli_query(
    $connection,

"SELECT * FROM product ORDER BY ID DESC LIMIT $offset, $total_records_per_page"
    );
$i=1;
while ($rows=mysqli_fetch_array($result)) {
?>
	<tr>
	<td>
	<?php echo "$i";?>
	</td>
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
$i++;
}
?>
</table>

<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
<?php if($page_no > 1){
echo "<li><a href='?page_no=1'>First Page</a></li>";
} ?>
    
<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>Previous</a>
</li>
    
<li <?php if($page_no >= $total_no_of_pages){
echo "class='disabled'";
} ?>>
<a <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Next</a>
</li>
 
<?php if($page_no < $total_no_of_pages){
echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>
</ul>
</body>