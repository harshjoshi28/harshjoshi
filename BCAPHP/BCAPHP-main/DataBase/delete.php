<?php
include "config.php";
$id = $_REQUEST['id'];
$delete = "DELETE FROM `stud` WHERE `id`='$id'";
$result = mysqli_query($con,$delete);
header("location:stud.php");
?>