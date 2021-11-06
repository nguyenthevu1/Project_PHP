<?php
include('../db/config.php');
session_start();

if (isset($_POST['forgot'])) {
    $email = $_POST['forgotMail'];

    if (empty($email)) {

        $_SESSION['errorEmail'] = 'Vui lòng nhập trường này';
        header('location: forgotpass.php');
    }
    if (!empty($email)) {

        $sql = "SELECT * from users where email= '$email'";
        $forgot = mysqli_query($conn, $sql);

        if ($forgot) {

            header('location:../admin/login.php');
            $row = mysqli_fetch_assoc($forgot);
            $code = $row['vkey'];
            //send email
            //SMTP needs accurate times, and the PHP time zone MUST be set
            //This should be done in your php.ini, but this is how to do it if you don't have access to that
            date_default_timezone_set('Etc/UTC');

            require 'smtpmail/PHPMailerAutoload.php';

            //Create a new PHPMailer instance
            $mail = new PHPMailer();

            //Tell PHPMailer to use SMTP
            $mail->isSMTP();

            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 2;

            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';

            //Set the hostname of the mail server
            $mail->Host = 'smtp.gmail.com';

            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 587;

            //Set the encryption system to use - ssl (deprecated) or tls
            $mail->SMTPSecure = 'tls';

            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;

            //Username to use for SMTP authentication - use full email address for gmail
            $mail->Username = "satthumaulanh2001@gmail.com";

            //Password to use for SMTP authentication
            $mail->Password = "baazbgbjxxlcotyt";

            //Set who the message is to be sent from
            $mail->setFrom('satthumaulanh2001@gmail.com', 'Doi mat khau');

            //Set an alternative reply-to address
            $mail->addReplyTo('satthumaulanh2001@gmail.com', 'second Last');

            //Set who the message is to be sent to
            $mail->addAddress($email);

            //Set the subject line
            $mail->Subject = '[Doi mat khau]';

            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            $mail->msgHTML('
            <h3>Đổi mật khẩu</h3>
            <div><p>Vui lòng bấm vào link bên dưới để Đổi mật khẩu cho tài khoản của bạn</p></div>
            http://localhost/folder/project_PHP/client/updatepassword.php?code='.($code).'>
            ');

            //Replace the plain text body with one created manually
            // $mail->AltBody = 'This is a plain-text message body';

            //Attach an image file
            // $mail->addAttachment('images/phpmailer_mini.png');

            //send the message, check for errors
            if (!$mail->send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "Message sent!";
            }
        } else {
            echo 'Something went wrong';
        }
    }
}
