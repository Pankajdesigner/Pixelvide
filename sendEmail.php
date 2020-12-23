<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['subject'];
    $body = "Hello Pixelvide Team,<br /><br />Find below details: "."Name: ".$name."<br /> "."Email: ".$email."<br /> "."Mobile: ".$mobile."<br /> "."Subject: ".$subject."<br /> Message: <br />".$_POST['message'];

    //PHPMailer Object
    $mail = new PHPMailer(true); //Argument true in constructor enables exceptions

    //From email address and name
    $mail->SetFrom("prakash@pixelvide.com","Pixelvide");
    // $mail->From = "prakash@pixelvide.com";
    // $mail->FromName = "Pixelvide";

    //smtp settings
    /*$mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "prakash@pixelvide.com";
    $mail->Password = '';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";  */

    //To address and name
    $mail->addAddress("prakash@pixelvide.com", "Pixelvide");
    // $mail->addAddress("recepient1@example.com"); //Recipient name is optional

    //Address to which recipient will reply
    $mail->addReplyTo($email, $name);

    //CC and BCC
    // $mail->addCC("cc@example.com");
    // $mail->addBCC("bcc@example.com");

    //Send HTML or Plain Text email
    $mail->isHTML(true);

    $mail->Subject = $name." Send mail from Get in Touch at Pixelvide";
    $mail->Body = "Hello Pixelvide Team,<br /><br />Find below details: "."Name: ".$name."<br /> "."Email: ".$email."<br /> "."Mobile: ".$mobile."<br /> "."Subject: ".$subject."<br /> Message: <br />".$_POST['message'];
    $mail->AltBody = "";

    try {
        $mail->send();
        $status = true;
        $response =  "Message has been sent successfully";
    } catch (Exception $e) {
        $status = false;
        $response =  "Mailer Error: " . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>