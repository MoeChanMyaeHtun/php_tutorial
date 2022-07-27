<?php 
include "db_conn.php";
include "read.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Register List</h1>
    <section class="sec-table">
    <table>
        <tr>
            <th class="col col1" name="id">ID</th>
            <th class="col col1">Name</th>
            <th class="col col1">Age</th>
            <th class="col col1">Phone</th>
            <th class="col col1">Address</th>
            <th class="col col1">Year</th>
            <th class="col col1">Action</th>
        </tr>
        
    <?php
    while ($rows = mysqli_fetch_assoc($result)) {
    ?>
     <tr>
                                <td class="col"><?= $rows['ID']; ?></td>
                                <td class="col"><?= $rows['Emp_name']; ?></td>
                                <td class="col"><?= $rows['Age']; ?></td>

                                <td class="col"><?= $rows['Phone']; ?></td>
                                <td class="col"><?= $rows['Address']; ?></td>
                                <td class="col"><?= $rows['Year']; ?></td>
                                <td class="col">
                                    <a href="update.php?id=<?= $rows['ID'];?>">Edit</a>
                                <a href="del.php?id=<?= $rows['ID'];?>">Delete</a>
                            </td>
     </tr>
                                <?php } ?>
    </table>
    </section>
</body>
</html>