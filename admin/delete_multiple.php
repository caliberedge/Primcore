<?php
include("../connection.php");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM product WHERE ID = '".$id."'";
  mysqli_query($connection, $query);
 }
}
?>