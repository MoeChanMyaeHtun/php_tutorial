<?php
     include 'db.php';
     session_start();
     if(isset($_GET['email'])){

        $email=$_GET['email'];
        $sql="SELECT * FROM tuto_10.users WHERE email = '$email' ";
        $result=mysqli_query($conn,$sql);
    }
    if(isset($_POST['edit'])){
        $pw = $_POST['password'];
        $conf=$_POST['conf'];
        $errors=[];
        if ($conf == '') {
            $errors['conf'] = 'This field could not be empty';
        } else {
            if ($pw != $conf) {
                $errors['password'] = 'Password do not match';
            }
        }
        if ($pw == '') {
            $errors['password'] = 'This field could not not be empty';
        }

     if (count($errors) == 0) {
      $sql="UPDATE tuto_10.users SET `password`='$pw'";
        $result=mysqli_query($conn,$sql);
        header("location:login.php");
      }
    }

 
   
?>
<?php include 'header.php' ?>
<h1 class="reg-ttl">Create new password</h1><br>
<form action="" method="POST" class="form">
        <input type="hidden" name="email" value="$_GET['email']">
        <div class="box">
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Enter Your Password" value="<?php if(isset($pw)){echo $pw;}  ?>"/>
        <label class="danger"><?php echo isset($errors['password'])? $errors['password']:'';?></label>
    </div>
    <div class="box">
        <label>Confirm Password</label><br>
        <input type="password" name="conf" placeholder="Enter Your Confirm Password" value="<?php if(isset($conf)){echo $conf;}  ?>"/>
        <label class="danger"><?php echo isset($errors['conf'])? $errors['conf']:'';?></label>
    </div>
    <div class="box">
        <input type="submit" value="Send" name="edit" class="btn">
    </div>
    </form>
   


<?php include 'footer.php' ?>