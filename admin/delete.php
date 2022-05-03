<?php
include("../connection.php");
$del_id = $_GET['id'];  
if($connection === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
  
$sql = "DELETE FROM product WHERE ID='$del_id'"; 
if(mysqli_query($connection, $sql)){ 
   echo '<script type="text/javascript"> alert("Record Successfully Deleted")
            window.location.assign("veiw.php")
               </script>';
}
else{ 
    echo "ERROR: Could not able to execute $sql. ";                                  
} 
?> 