<?php
include "db_conn.php";

if(isset($_GET['id'])){

    $id=$_GET['id'];
    $sql="SELECT * FROM employee.register WHERE ID=$id";
    $result=mysqli_query($conn,$sql);
    while ($res = mysqli_fetch_array($result)) {
        $id = $res['ID'];
        $user_name = $res['Emp_name'];
        $age = $res['Age'];
        $phone = $res['Phone'];
        $address = $res['Address'];
        $year = $res['Year'];
        
    }

}
if(isset($_POST['edit'])){
    $id=$_POST['id'];
    $user_name = $_POST['name'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$year = $_POST['year'];
    $sql="UPDATE employee.register SET Emp_name='$user_name',Age='$age', Phone='$phone', Address='$address' ,year='$year' WHERE ID=$id";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        header("Location: home.php");
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
	<input type="hidden" name="id" value="<?php echo $id ?>" >

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
		<div class="box clearfix"> <label for="">Year</label>
		<div class="R-blk clearfix" >
			<input type="text" name="year" class="txt" value="<?php echo isset($year)?$year:'' ?>"><br>
			<span class="alert"><?php echo isset($errors['year']) ? $errors['year']:''; ?></span>
		</div>
		</div>
		<div class="box clearfix"><label for="">Address</label>
		<div class="R-blk clearfix" >
			<textarea name="address" id="" cols="30" rows="3" class="txt" ><?php echo $address ; ?></textarea><br>
			<span class="alert"><?php echo isset($errors['address']) ? $errors['address']:''; ?></span>
		</div>
		</div>
		<div class="box clearfix"><label for=""></label><div class="R-blk clearfix" >
            <button class="btn1" type="submit" name="edit">Update</button></div></div>
	</form>
</body>

</html>