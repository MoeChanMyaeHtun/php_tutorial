<?php include 'db.php';
include 'logout.php'


?>

<?php include 'header.php' ?>
<section class="container">
<nav class="gnav clearfix">
    <div class="L">
    <ul class="clearfix">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    </div>
    <div class="R">
        <form action="" method="POST">
        <input type="submit" name='logout' value="Logout" class="btn">
        </form>
    </div>
</nav>
</section>
<?php include 'footer.php'?>