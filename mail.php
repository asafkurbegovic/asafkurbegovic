<?php

    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['name']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        
    
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //$mail -> isSMTP();
    $mail ->Host = "smtp.gmail.com";
    $mail -> SMTPAuth =true;
    $mail -> Username ="asaftestphp@gmail.com";
    $mail -> Password ='asaftest123';
    $mail -> Port =465; 
    $mail -> SMTPSecure="ssl";

    $mail ->isHTML(true);
    $mail -> setForm($email,$name);
    $mail -> addAdress("asafkurbegovic@gmail.com");
    $mail -> Subject = $subject;
    $mail -> Body = $body;

        if ($mail->send()){
            $response ="email sent";
        }
        else{
            $response = "error" .$mail->ErrorInfo;
        }
        exit(json_encode(array("response"=>$response)));


    }

   




?>