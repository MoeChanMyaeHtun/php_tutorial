<?php

if( isset($_POST['submit']) ){
    $dob   =  new DateTime ($_POST['dob']);
    $today= new DateTime('today');
   
}
    
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
    <form action="" method="POST">
        <label for="">Birthday</label>
        <input type="date" name="dob"><input type="submit" name="submit"><br>
        <?php  if($dob > $today){
       echo "Invalid Date of Birth.";
    }else{
        $year = $dob->diff($today)->y;
        echo "<label>age=$year </label>";
    }?>
       

    </form>
</body>
</html>