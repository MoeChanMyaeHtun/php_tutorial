<?php

$dob = new DateTime($_GET['dob']);
$today   = new DateTime('today');
$year = $dob->diff($today)->y;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Birthday</label>
        <input type="text" name="dob"><br>
        <?php echo "<label>age=$year </label>";?> 
    </form>
</body>
</html>