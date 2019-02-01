<?php
include "newdb.php";
GET["id"];
$kid=$_GET["id"];
mysqli_query($conn,"DELETE FROM `student` where id='$kid'");
header("Location:view.php");
?>
