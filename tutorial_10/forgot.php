<?php 
    include 'db.php';
    include 'vendor/autoload.php';
?>
<?php include 'header.php' ?>
<section class="sec-fg">
<h1 class="reg-ttl">forgot password</h1><br>
    <form action="" method="POST" >
        <input type="email" name="email" placeholder="@gmail.com">
        <input type="submit" value="send" name="send" class="btn">
    </form>
    </section>
<?php include 'footer.php' ?>