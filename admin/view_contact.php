
<?php
require_once('top.php');
?>

<?php
include('menu.php');
?>

<?php

// The PHP multiple  delete query
error_reporting(0);
if (isset($_POST["submit"])) {
    if (count($_POST["ids"]) > 0 ) {
        // Imploding checkbox ids
        $all = implode(",", $_POST["ids"]);
        $sql =mysqli_query($connection,"DELETE FROM contact WHERE ID in ($all)");
        if ($sql) {
            $errmsg ="Data has been deleted successfully";
        } else {
            $errmsg ="Error while deleting. Please Try again."; 
        }
    } else {
        $errmsg = "You need to select atleast one checkbox to delete!";
    }  
}
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color: green">CLIENTS MESSAGES</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<form name="multipledeletion" method="post">
            <div class="row">
                                  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div style="color: blue" class="panel-heading">
                    	See Availabe Clients with their Messages   
                        </div>

<div class="panel-body">
     <!-- Message -->
<p style="color:red; font-size:16px;"><?php if($errmsg){ echo $errmsg; } ?>  </p>

<table align="center" class="table table-striped table-bordered" >

<tr>
    <td colspan="7"><input type="submit" name="submit" value="Delete" class="btn btn-primary btn-md pull-left" onClick="return confirm('Are you sure you want to delete?');" ></td> 
</tr>
	<tr>
        <!-- For Selecting All -->
		<th><input type="checkbox" id="select_all" /> Select all</th>
		<th>S/N</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Messages</th>
		<th colspan="2" align="center">Action</th>
	</tr>
<?php 
include("../connection.php");

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }

        $total_records_per_page = 10;

        $offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query(
$connection,
"SELECT COUNT(*) As total_records FROM contact"
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1

$result = mysqli_query(
    $connection,
    "SELECT * FROM contact ORDER BY ID DESC LIMIT $offset, $total_records_per_page"
    );
$i=1;
while($rows= mysqli_fetch_array($result)){
?>
	<tr>
	<td>
	<input type="checkbox" class="checkbox" name="ids[]" value="<?php echo $rows['ID'];?>"/>
	</td>
	<td>
	<?php echo "$i";?>
	</td>	
	<td>
	<?php echo $rows["name"];?>
	</td>
	<td>
	<?php echo $rows["email"]; ?>
	</td>
	<td>
	<?php echo $rows["phone"]; ?>
	</td>
	<td>
	<?php echo $rows["message"]; ?>
	</td>
	<th>
	<a href="contact_delete.php?id=<?php echo $rows['ID'];?>"  onclick="return confirm('Are You Sure, You Want to Remove this Record?');" style="color: red">Delete</a>
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
</form>


<!-- Multiple selection Jquery script-->
<script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
 <?php
include('footer.php');
?>     
   