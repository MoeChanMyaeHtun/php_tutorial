<?php 
    include 'db.php';
    include 'vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    if( isset($_POST['reset']) && isset($_POST['email']) ){
        $email = $_POST['email'];
       
        $sql="SELECT * FROM tuto_10.users WHERE email = '$email' ";
        $result= mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)){
           
     
        $link  = "http://localhost/OJT_PHP/tutorial_10/reset.php?email=$email";
    
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host       = "smtp.gmail.com";
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "tls";
        $mail->Port       = "587";
        $mail->Username   = "monshoon5@gmail.com";
        $mail->Password   = "xcsghzibzrpgiqqw";
    
        $mail->Subject = 'Reset Password';
        $mail->SetFrom("monshoon5@gmail.com", "Admin Team");
        $mail->Body = "Click On This Link to Reset Password " . $link . '';
        $mail->AddAddress($email);
        $mail->IsHTML(true);
    
        if($mail->send()){
            die('Email Sent Successfully');
        }else{
            die('Email Sending Fail<br>' . $mail->ErrorInfo);
        }
    }
}
?>
<?php include 'header.php' ?>
<section class="sec-fg">
<h1 class="reg-ttl">forgot password</h1><br>
    <form action="" method="POST" >
        <input type="email" name="email" placeholder="@gmail.com" class="email">
        <input type="submit" value="send " name="reset" class="btn">
    </form>
    </section>
<?php include 'footer.php' ?>