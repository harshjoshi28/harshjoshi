<?php
include "config.php";

$fnm = $_REQUEST['fnm']; // form field name
$lnm = $_REQUEST['lnm'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];

$insert = "INSERT INTO `stud`(`fnm`,`lnm`,`email`,`contact`) VALUES('$fnm','$lnm','$email','$contact')";
$result = mysqli_query($con,$insert);

if($result == TRUE)
{
   header("location:stud.php");
}
else
{
    echo "NOT";
}
?>