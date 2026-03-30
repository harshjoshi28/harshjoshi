<?php
include "config.php";

$id = $_REQUEST['id'];
$fnm = $_REQUEST['fnm'];
$lnm = $_REQUEST['lnm'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];

$update = "UPDATE `stud` SET `fnm`='$fnm',`lnm`='$lnm',`email`='$email',`contact`='$contact' WHERE `id`='$id'";
$result = mysqli_query($con,$update);

if($result == TRUE)
{
    header("location:stud.php");
}
?>