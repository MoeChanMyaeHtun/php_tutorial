<?php

use chillerlan\QRCode\QRCode;

include 'vendor/autoload.php';

$result = '';

if (isset($_POST['txet']) && !empty($_POST['txet'])) {
    $result = (new QRCode())->render($_POST['txet']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Creat Your Gmail QR code</h1>
    <section class="sec-mv clearfix">
        <form action="index.php" method="POST" class="form">
            <label for="">Content:</label>
            <input type="txet" name='txet' class="email">
            <input type="submit" class="btn">
        </form>
        <div class="QR">
        <?php if (isset($result) && !empty($result)): ?>
            <img src="<?= $result ?>"/>
        <?php endif; ?>
        </div>
    </section>
</body>
</html>