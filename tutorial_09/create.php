<?php



if (isset($_POST['confirm'])) {
	include "db_conn.php";
	$user_name = $_POST['name'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$language = $_POST['language'];
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
	if ($year == '') {
		$errors['year'] = 'This field could not be empty year';
	}
	if ($address == '') {
		$errors['address'] = 'This field could not be empty address';
	}
	foreach ($errors as $key => $value) {
		if (empty($value)) {
			unset($errors[$key]);
		}
	}
	$sql = "INSERT INTO employee.register (Emp_name,Age,Phone,Address,Language) VALUES ('$user_name','$age','$phone','$address',$language)";


        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: home.php?successfully created");
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
	<form action="" method="post" enctype = "multipart/form-data">
	<input type="hidden" name="id" >

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
		<div class="box clearfix"> <label for="">Year</label>
		<div class="R-blk clearfix" >
			<input type="text" name="year" class="txt" value="<?php echo isset($year)?$year:'' ?>"><br>
			<span class="alert"><?php echo isset($errors['year']) ? $errors['year']:''; ?></span>
		</div>

		</div>
		<div class="box clearfix"><label for="">Address</label>
		<div class="R-blk clearfix" >
			<textarea name="address" id="" cols="30" rows="3" class="txt" ></textarea><br>
			<span class="alert"><?php echo isset($errors['address']) ? $errors['address']:''; ?></span>
		</div>
		</div>
		<div class="box clearfix"><label for=""></label><div class="R-blk clearfix" ><input type="submit" value="Confirm" name="confirm" class="btn1"></div></div>
	</form>
</body>

</html>