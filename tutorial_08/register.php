<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'moechan');
define('DB_NAME', 'tutorial_08');
define('DB_PORT', '3306');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

if (isset($_POST['confirm'])) {
	$user_name = $_POST['name'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$errors = [];
	if ($user_name == '') {
		$errors['name'] = 'User name must be enter';
	}
	if ($age == '') {
		$errors['age'] = 'This field could not be empty age';
	}
	if ($phone == '') {
		$errors['phone'] = 'This field could not be empty phone';
	}
	if ($address == '') {
		$errors['address'] = 'This field could not be empty address';
	}
	foreach ($errors as $key => $value) {
		if (empty($value)) {
			unset($errors[$key]);
		}
	}


	if(count($errors) == 0) {
		$sql = "INSERT INTO `register` (`name`,`age`,`phone`,`address`)VALUES('$user_name','$age','$phone','$address')";
		$result = mysqli_query($conn, $sql);
		if($result) {
			header("location:home.php");
		}
	}
	
	

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
	<h1>Employee Register</h1>
	<form action="home.php" method="post">
		<div class="box clearfix"><label for="">Name</label>
		<div class="R-blk clearfix" >
			<input type="text" name="name"  class="txt" value="<?php echo isset($user_name)?$user_name:'' ?>"><br>
			<span class="alert"><?php echo isset($errors['name']) ? $errors['name']:''; ?></span></div>
		</div>
		<div class="box clearfix"><label for="">Age</label>
		<div class="R-blk clearfix" >
			<input type="text" name="age" class="txt" value="<?php echo isset($age)?$age:'' ?>" ><br>
			<span class="alert"><?php echo isset($errors['age']) ? $errors['age']:''; ?></span>
		</div>
		</div>
		<div class="box clearfix"> <label for="">Phone</label>
		<div class="R-blk clearfix" >
			<input type="text" name="phone" class="txt" value="<?php echo isset($phone)?$phone:'' ?>"><br>
			<span class="alert"><?php echo isset($errors['phone']) ? $errors['phone']:''; ?></span>
		</div>
		</div>
		<div class="box clearfix"><label for="">Address</label>
		<div class="R-blk clearfix" >
			<textarea name="address" id="" cols="30" rows="3" class="txt" ></textarea><br>
			<span class="alert"><?php echo isset($errors['address']) ? $errors['address']:''; ?></span>
		</div>
		</div>
		<div class="box clearfix"><label for=""></label><div class="R-blk clearfix" ><input type="submit" value="Confirm" name="confirm" class="btn1"><input type="reset" value="Reset" class="btn2"></div></div>
	</form>
</body>

</html>