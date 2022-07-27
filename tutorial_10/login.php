<?php
include 'db.php';

session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pw = $_POST['password'];
    $errors=[];
    $query="SELECT * FROM tuto_10.users";
    $res=mysqli_query($conn,$query);
    while($out=mysqli_fetch_array($res))
    {
        $db_email=$out['email']	;	
        $db_password=$out['password'];
        
        if($db_email==$email && $db_password==$pw)
        {
            $_SESSION['email']=$email;
            $_SESSION['password']=$pw;   
            header("Location:index.php?login success");
          
        }
        
}
}

?>
<?php include 'header.php' ?>
<section class="sec-login" >
    <div class="login clearfix">
<div class="left">
    
</div>
<div class="right">
    <form action=" " method="POST">
     <input type="email" name="email" placeholder="@gmial.com" >
     <input type="password" name="password" placeholder="password" >
     <p class="txt"><a href="forget.php" > Forgot Password</a> </p>
    <input type="submit" value="Login" name="login" class="btn">
    </form>
</div>
</div>
</section>

<?php include 'footer.php' ?>