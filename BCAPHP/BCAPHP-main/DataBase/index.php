<!DOCTYPE html>
<html lang="en">
<body>
    <form action="addrecord.php" method="POST">
        <table border="1px solid" align="center">
        <tr>
            <td><h2 align="center">Registration Form</h2></td>
        </tr>
        <tr>
            <td>First Name:<input type="text" name="fnm" id="fnm"></td>
        </tr>
        <tr>
            <td>Last Name:<input type="text" name="lnm" id="lnm"></td>
        </tr>
        <tr>
            <td>Email:<input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td>Contact:<input type="number" name="contact" id="contact"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Register" name="btnsubmit">
            <input type="reset" value="Clear" name="btnclear"></td>
        </tr>
    </table>
    </form>
</body>
</html>