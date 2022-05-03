<?php
ob_start();
//connection
include("../connection.php");
session_start();

$username = mysqli_real_escape_string($connection,$_POST['email']);
$password = mysqli_real_escape_string($connection,$_POST['password']);



//Query
$result = mysqli_query($connection,"SELECT * FROM admin WHERE email = '$username' and password = '$password'")
      or die("Username or Password incorrect");
 $row = mysqli_fetch_array($result);
 if ($row['email'] == $username && $row['password'] == $password) {
 $_SESSION['ID'] = $row['ID'];	
   header("Location:../admin/admin1.php");  
 }else{

 	$result = mysqli_query($connection,"SELECT * FROM client WHERE email = '$username' and password = '$password'")
      or die("Username or Password incorrect");
 $row = mysqli_fetch_array($result);
 if ($row['email'] == $username && $row['password'] == $password) {
 $_SESSION['ID'] = $row['ID'];	
   header("Location:../client/admin.php");  
 ob_end_clean();
 }else{

  echo '<script type="text/javascript"> alert("Incorrect Username or Password") 
               window.location.assign("login.php")
                              </script>';
 }
 }
?>