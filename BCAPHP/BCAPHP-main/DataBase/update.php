<?php
include "config.php";
$id = $_REQUEST['id'];
$sql = "SELECT * FROM `stud` WHERE `id`='$id'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="updateaction.php?id=<?php echo $id; ?>" method="POST">
        <table border="1px solid" align="center">
        <tr>
            <td><h2 align="center">Registration Form</h2></td>
        </tr>
        <tr>
            <td>First Name:<input type="text" name="fnm" id="fnm" value="<?php echo $row['fnm'];?>"></td>
        </tr>
        <tr>
            <td>Last Name:<input type="text" name="lnm" id="lnm" value="<?php echo $row['lnm'];?>"></td>
        </tr>
        <tr>
            <td>Email:<input type="email" name="email" id="email" value="<?php echo $row['email'];?>"></td>
        </tr>
        <tr>
            <td>Contact:<input type="number" name="contact" id="contact" value="<?php echo $row['contact'];?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Register" name="btnsubmit">
            <input type="reset" value="Clear" name="btnclear"></td>
        </tr>
    </table>
    </form>
</body>
</html>