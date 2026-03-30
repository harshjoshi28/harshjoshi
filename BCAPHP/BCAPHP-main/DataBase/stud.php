<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
</head>
<body>
    <h2 align="center">Student Records</h2>
    <table border="1px solid" align="center">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
            include "config.php";
            $sql = "SELECT * FROM `stud`";
            $result = mysqli_query($con,$sql);
            while($data = mysqli_fetch_assoc($result))
            {
        ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['fnm']; ?></td>
            <td><?php echo $data['lnm']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['contact']; ?></td>
            <td><a href="update.php?id=<?php echo $data['id']; ?>">Update</a></td>
            <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>