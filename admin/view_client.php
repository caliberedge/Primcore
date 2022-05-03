
<?php
require_once('top.php');
?>

<?php
include('menu.php');
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color: green">CLIENTS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                                  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div style="color: blue" class="panel-heading">
                    	See Availabe Clients
                        </div>
                        <div class="panel-body">
<table border="2" align="center" class="table table-striped">
	<tr>
		<th>S/N</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Date of Birth</th>
		<th>Gender</th>
		<th>Address</th>
		<th>Password</th>
		<th colspan="2" align="center">Action</th>
	</tr>
<?php 
include("../connection.php");

$show="SELECT * FROM client ORDER BY ID DESC";
$result=mysqli_query($connection, $show);
$i=1;
while ($rows=mysqli_fetch_array($result)) {
?>
	<tr>
	<td>
	<?php echo "$i";?>
	</td>
	<td>
	<?php echo $rows["firstname"];?>
	</td>
	<td>
	<?php echo $rows["lastname"]; ?>
	</td>
	<td>
	<?php echo $rows["email"]; ?>
	</td>
	<td>
	<?php echo $rows["phone"]; ?>
	</td>
	<td>
	<?php echo $rows["dob"]; ?>
	</td>
	<td>
	<?php echo $rows["gender"]; ?>
	</td>
	<td>
	<?php echo $rows["address"]; ?>
	</td>
	<td>
	<?php echo $rows["password"]; ?>
	</td>
	<th>
	<a href="cdelate.php?id=<?php echo $rows['ID'];?>"  onclick="return confirm('Are You Sure, You Want to Remove this Record?');" style="color: red">Delete</a>
	</th>
	</tr>

	<?php
$i++;
}
?>
</table>
</body>