
<?php
include("../connection.php");

session_start();

$ID = $_SESSION['ID'];

$result = mysqli_query($connection,"SELECT * FROM admin WHERE ID = '$ID'")
      or die("Query failed");
 $row = mysqli_fetch_array($result);
 if ($row['ID'] == $ID) {

}
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="color: green"><i class="fa fa-square-o "></i>&nbsp;Welcome C.E.O Primecore Global</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                   <!--     <li><a href="#">See Website</a></li>
                        <li><a href="#">Open Ticket</a></li>-->
                        <li><a href="../index.php" style="color: red"><i class="fa fa-sign-out fa-fw"></i>Log Out</a></li></a>
                    </ul>
                </div>

            </div>
        </div>
