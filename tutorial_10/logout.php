<?php
 if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php?logout success");
}
?>