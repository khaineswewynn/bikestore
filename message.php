<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/Exception.php';
require_once __DIR__ . '/vendor/PHPMailer.php';
require_once __DIR__ . '/vendor/SMTP.php';
include_once "layouts/navbar.php";

if(isset($_POST['send']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $mail = new PHPMailer(true);
    //var_dump($_FILES['attachments']);
try {
    // Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'khaineshwewynn@gmail.com'; // YOUR gmail email
    $mail->Password = 'rlkt appc txpz dvyd'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('khaineshwewynn@gmail.com', 'HMI');
    $mail->addAddress($email, $name);
    //$mail->addReplyTo('example@gmail.com', 'Sender Name'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
  
    foreach($_FILES['attachments']['name'] as $key=>$value)
    {
        $mail->addAttachment($_FILES['attachments']['tmp_name'][$key],$_FILES['attachments']['name'][$key]);
    }

    if($mail->send())
    {
        $message="Email is successfully sent";
    }
    else
    {
        $message="Error in messaging";
    }
    echo $message;
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
        <div id="layoutSidenav">
            <?php
            include_once("layouts/sidebar.php");
            ?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 w-100">
                            <?php
                            if(isset($message))
                            {
                                echo "<span class='alert alert-success w-100'>".$message."</span>";
                            }
                            ?>
                        </div>
                    </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="" class="form-label">Enter customer Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div>
                        <label for="" class="form-label">Enter customer email</label>
                        <input type="email" name="email" id="" class="form-control">
                    </div>
                    <div>
                        <label for="" class="form-label">Enter Subject</label>
                        <input type="text" name="subject" id="" class="form-control">
                    </div>
                    <div >
                    <label for="" class="form-label">Enter Message</label>
                        <textarea name="message" id="" rows="3" cols="50" class="form-control">

                        </textarea>
                    </div>
                    <div>
                        <input type="file" name="attachments[]" id="" multiple="multiple">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-dark" name="send">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                </main>
<?php
include_once("layouts/footer.php");
?>
