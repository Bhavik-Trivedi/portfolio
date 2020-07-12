<?php

// session_start();
include('connect.php');

date_default_timezone_set("Asia/Kolkata");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/vendor/autoload.php';

$db = new Database();
$conn = $db->dbConnection();
$name = $_POST['name'];
$name = ucwords($name);
$email = $_POST['email'];
$phone = $_POST['contact'];
$yourmessage = $_POST['yourmessage'];
// $ighandle = $_POST['ighandle'];
$created_date = date('y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$flag = 1;

$stmt = $conn->prepare("select * from userdata1 where email = '$email'");
$stmt->execute();
$rowCount = $stmt->rowCount();

if($rowCount < 1)
{
    $stmt1 = $conn->prepare("select * from userdata1 where flag = 1");
    $stmt1->execute();
    $rowCount1 = $stmt1->rowCount();
    
    // if($rowCount1 <= 1000)
    // {
        $stmt = $conn->prepare("INSERT INTO `userdata1`( `name`, `email`, `phone`,`yourmessage`,`created_date`,`ip`,`flag`) VALUES(:name,:email,:phone,:yourmessage,:created_date,:ip,:flag)");
    
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':yourmessage', $yourmessage);
        /*$stmt->bindParam(':ighandle', $ighandle);*/
        $stmt->bindParam(':created_date', $created_date);
        $stmt->bindParam(':ip', $ip);
        $stmt->bindParam(':flag', $flag);
        echo '1';
        die();
        // if($stmt->execute())
        // {
        //     $mail = new PHPMailer;
    
        //     // SMTP configuration
        //     $mail->isSMTP();
        //     $mail->Host = 'smtp.gmail.com';
        //     $mail->Port = 587;
        //     //$mail->SMTPKeepAlive = true;  
        //     $mail->SMTPSecure = 'ssl';
        //     $mail->Mailer = “smtp”;
        //     $mail->SMTPAuth = true;
        //     $mail->Username = 'btdgr8@gmail.com';
        //     $mail->Password = 'btdgr8@1992';
        //    // $mail->SMTPSecure = 'tls';
        //     //$mail->Port = 587;
        //     //$mail->SMTPDebug = 4;
            
        //     $mail->setFrom('btdgr8@gmail.com', "Bhavik Trivedi's Portfolio");
        //     $mail->addReplyTo('btdgr8@gmail.com', "Bhavik Trivedi's Portfolio");
            
        //     $mail->addAddress($email);
            
        //     $mail->Subject = "Hello from Bhavik Trivedi";
            
        //     // Set email format to HTML
        //     $mail->isHTML(true);
            
        //     // Email body content
        //     // $mailContent = "Ho! Ho! Ho!<br><br>";
        //     $mailContent .= "Hi ".$name.",<br><br>";
        //     $mailContent .= 'Thanks for filling in your details. I shall get back in touch with you soon.<br><br>';
        //     // $mailContent .= "Start by collecting gifts by spreading the word on social networks. Copy the following text:<br><br>";
            
        //     // $mailContent .= '<i>"Guys,<br><br>';

        //     // $mailContent .= 'I am going to be playing Santa this year on Christmas. I will be distributing gifts to each and everyone I can reach out to on December 25th.<br><br>
        //     // Every Santa needs Elves. You can help me fill my goodie bag by contributing gifts. The gifts need to be very simple - chocolates, lollipops, slice cakes, sweets, crayons, stationery for children, caps, small toys, juices, etc. Nothing expensive.<br><br>
        //     // The idea is to simply spread as many smiles as we can. Rich or poor, old or young, bold or beautiful - we want to reach out to all!<br><br>
        //     // Help me fill my bag. Comment or DM me. And let’s spread smiles!<br><br>
        //     // #MainBhiSanta”</i><br><br>';
        //     // $mailContent .= "<b><u>For Facebook:</u></b><br><br>";
        //     // $mailContent .= "Share the above text on Facebook amongst your friends and family.<br><br>";
        //     //  $mailContent .= "<b><u>For Instagram:</u></b><br><br>";
        //     //  $mailContent .= "Click <b><a href='http://www.mainbhisanta.com/images/instashare.png' target='_BLANK'>HERE</a></b> to download the image which you can share as an Instastory.<br><br>";

        //     // $mailContent .= "<b><u>For Whatsapp:</u></b><br><br>";
        //     // $mailContent .= 'Click <b><a href="https://api.whatsapp.com/send?text=%23MainBhiSanta Everybody can become Santa because everyone can give.You can become Santa this Christmas and spread some goodness. Find out how on http://www.mainbhisanta.com" title="Share On Whatsapp" data-action="share/whatsapp/share" alt="" target="_blank">HERE</a></b> to share on whatsapp.<br><br>';
        //     //  $mailContent .= "==========<br><br>";

        //     // $mailContent .= "If you have any questions you can reply to this email and we will reply at the earliest. We are here to help and support you do good.<br><br>";
        //     // $mailContent .= "We really look forward to making people happy with you!<br><br>";

        //     $mailContent .= "Regards,<br>";
        //     $mailContent .= "Bhavik Trivedi<br><br>";


        //     $mail->Body = $mailContent;
            
        //     // Send email
        //     if(!$mail->send()){
        //         echo 'Message could not be sent.';
        //         echo 'Mailer Error: ' . $mail->ErrorInfo;
        //     }else{
        //         // $_SESSION['thankyou'] = 1;
        //         //header('yourmessage: thankyou.php');
        //         echo '1';
        //     }
        // }
    // }
    // else
    // {
    // 	$stmt = $conn->prepare("INSERT INTO `userdata1`( `name`, `email`, `phone`,`created_date`,`ip`,`flag`) VALUES(:name,:email,:phone,:created_date,:ip,:flag)");
    
    //     $stmt->bindParam(':name', $name);
    //     $stmt->bindParam(':email', $email);
    //     $stmt->bindParam(':phone', $phone);
    //     /*$stmt->bindParam(':ighandle', $ighandle);*/
    //     $stmt->bindParam(':created_date', $created_date);
    //     $stmt->bindParam(':ip', $ip);
    //     $stmt->bindParam(':flag', $flag);
        
    //     if($stmt->execute())
    //     {
    //         $mail = new PHPMailer;
    
    //         // SMTP configuration
    //         $mail->isSMTP();
    //         $mail->Host = 'smtp.gmail.com';
    //         //$mail->SMTPKeepAlive = true;   
    //         $mail->Mailer = “smtp”;
    //         $mail->SMTPAuth = true;
    //         $mail->Username = 'btdgr8@gmail.com';
    //         $mail->Password = 'btdgr8@1992';
    //         $mail->SMTPSecure = 'tls';
    //         $mail->Port = 587;
    //         //$mail->SMTPDebug = 4;
            
    //         $mail->setFrom('btdgr8@gmail.com', "Bhavik Trivedi's Portfolio");
    //         $mail->addReplyTo('btdgr8@gmail.com', "Bhavik Trivedi's Portfolio");
            
    //         $mail->addAddress($email);
            
    //         $mail->Subject = "Let's all Santa";
            
    //         // Set email format to HTML
    //         $mail->isHTML(true);
            
    //         // Email body content
    //         $mailContent = "Ho! Ho! Ho!<br><br>";
    //         $mailContent .= "Hi Santa ".$name.",<br><br>";
    //         $mailContent .= 'Now that you have said #MainBhiSanta, you are going to make a lot of people happy.<br><br>';
    //         $mailContent .= "Start by collecting gifts by spreading the word on social networks. Copy the following text:<br><br>";
            
    //         $mailContent .= '<i>"Guys,<br><br>';

    //         $mailContent .= 'I am going to be playing Santa this year on Christmas. I will be distributing gifts to each and everyone I can reach out to on December 25th.<br><br>
    //         Every Santa needs Elves. You can help me fill my goodie bag by contributing gifts. The gifts need to be very simple - chocolates, lollipops, slice cakes, sweets, crayons, stationery for children, caps, small toys, juices, etc. Nothing expensive.<br><br>
    //         The idea is to simply spread as many smiles as we can. Rich or poor, old or young, bold or beautiful - we want to reach out to all!<br><br>
    //         Help me fill my bag. Comment or DM me. And let’s spread smiles!<br><br>
    //         #MainBhiSanta”</i><br><br>';
    //         $mailContent .= "<b><u>For Facebook:</u></b><br><br>";
    //         $mailContent .= "Share the above text on Facebook amongst your friends and family.<br><br>";
    //          $mailContent .= "<b><u>For Instagram:</u></b><br><br>";
    //          $mailContent .= "Click <b><a href='http://www.mainbhisanta.com/images/instashare.png' target='_BLANK'>HERE</a></b> to download the image which you can share as an Instastory.<br><br>";

    //          $mailContent .= "<b><u>For Whatsapp:</u></b><br><br>";
    //          $mailContent .= 'Click <b><a href="https://api.whatsapp.com/send?text=%23MainBhiSanta Everybody can become Santa because everyone can give.You can become Santa this Christmas and spread some goodness. Find out how on http://www.mainbhisanta.com" title="Share On Whatsapp" data-action="share/whatsapp/share" alt="" target="_blank">HERE</a></b> to share on whatsapp.<br><br>';
    //          $mailContent .= "==========<br><br>";

    //         $mailContent .= "If you have any questions you can reply to this email and we will reply at the earliest. We are here to help and support you do good.<br><br>";
    //         $mailContent .= "We really look forward to making people happy with you!<br><br>";

    //         $mailContent .= "Regards,<br>";
    //         $mailContent .= "1SmallStep<br><br>";


    //         $mail->Body = $mailContent;
            
    //         // Send email
    //         if(!$mail->send()){
    //             echo 'Message could not be sent.';
    //             echo 'Mailer Error: ' . $mail->ErrorInfo;
    //         }else{
    //             $_SESSION['thankyou'] = 1;
    //             //header('yourmessage: thankyou.php');
    //             echo '1';
    //         }
    //     }
    // }
}
else
{
    echo '2';
    die();
}
?> 