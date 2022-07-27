<?php
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pw = $_POST['password'];
    $conf_pw = $_POST['conf_pw'];
    include 'db.php';
    $errors = [];
    if ($name == '') {
        $errors['name'] = 'User name must be enter';
    }
    if ($email == '') {
        $errors['email'] = 'Request email';
    }
    if ($conf_pw == '') {
        $errors['conf_pw'] = 'This field could not be empty';
    } else {
        if ($pw != $conf_pw) {
            $errors['password'] = 'Password do not match';
        }
    }
    if ($pw == '') {
        $errors['password'] = 'This field could not not be empty';
    } 
    foreach ($errors as $key => $value) {
        if (empty($value)) {
            unset($errors[$key]);
        }
    }
    $sql = "INSERT INTO tuto_10.users (`user`,`email`,`password`) VALUES ('$name','$email','$password')";


    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: login.php?successfully created");
    }
}
?>

<?php include 'header.php'; ?>
<h1 class="reg-ttl">Log in register</h1>
<form action="" method="POST" class="form">
    <div class="box">
        <label>Name</label><br>
        <input type="text" name="name" placeholder="Enter Your Name" value="<?php if(isset($name)){echo $name;}  ?>"/>
        <label class="danger"><?php echo isset($errors['name'])? $errors['name']:'';?></label>
    </div>
    <div class="box">
        <label>Email</label><br>
        <input type="email" name="email" placeholder="Enter Your Email" value="<?php if(isset($email)){echo $email;}  ?>"/>
        <label class="danger"><?php echo isset($errors['email'])? $errors['email']:'';?></label>
    </div>
    <div class="box">
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Enter Your Password" value="<?php if(isset($pw)){echo $pw;}  ?>"/>
        <label class="danger"><?php echo isset($errors['password'])? $errors['password']:'';?></label>
    </div>
    <div class="box">
        <label>Confirm Password</label><br>
        <input type="password" name="conf_pw" placeholder="Enter Your Confirm Password" value="<?php if(isset($conf_pw)){echo $conf_pw;}  ?>"/>
        <label class="danger"><?php echo isset($errors['conf_pw'])? $errors['conf_pw']:'';?></label>
    </div>
    <div class="box">
        <input type="submit" value="Sing Up" name="submit" class="btn">
    </div>
</form>
<?php include 'footer.php'; ?>