<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */

 /*log
 https://packagist.org/packages/monolog/monolog
 */
require_once(dirname(__FILE__). "/vendor/autoload.php");

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require(dirname(__FILE__)."/vendor/phpmailer/phpmailer/src/Exception.php");
require(dirname(__FILE__)."/vendor/phpmailer/phpmailer/src/PHPMailer.php");
require(dirname(__FILE__)."/vendor/phpmailer/phpmailer/src/SMTP.php");



// Create the logger
$logger = new Logger('my_logger');
// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());



/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    // You can now use your logger
    $logger->info('Entro a try ');

    if(count($_POST) == 0) throw new \Exception('Form is empty');

    $subject_from = isset($_POST['subject'])?$_POST['subject']:"";
    $name_from =  isset($_POST['name'])?$_POST['name']:"Unknown";
    $email_from = isset($_POST['email'])?$_POST['email']:"unknown@mail.com";
    $message_from = isset($_POST['message'])?$_POST['message']:"No message"."</p>";

    $mail = new PHPMailer;

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );


    //Enable SMTP debugging.
    $mail->SMTPDebug = 0;
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name
    $mail->Host = "smtpout.secureserver.net";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password
    $mail->Username = "admin@carlosramirez.ca";
    $mail->Password = "Tibana@01";

    $mail->addAddress("eramirezcarlos@gmail.com", "Carlos A Ramirez");
    $mail->Port = 80;

    $mail->isHTML(true);

    $mail->From = isset($_POST['email'])?$_POST['email']:"unknown@mail.com";
    $mail->FromName = isset($_POST['name'])?$_POST['name']:"Unknown";
    $mail->Subject = "Portfolio - " .$subject_from." - " .$email_from . " - " . $name_from;


    $content = $message_from;

    $mail->Body =   $content;

    $mail->AltBody = $content;

    $logger->info('Entro a exito ');

    if(!$mail->send())
    {
        //$_POST['email_error'] =  $mail->ErrorInfo;
        $errorMessage = "no envio correo ";
        $logger->info('Entro a exito '. $mail->ErrorInfo);
        $responseArray = array('type' => 'error', 'message' => $errorMessage);
    }
    else
    {
        //$_POST['email_success'] = "Message has been sent successfully";
        $logger->info('Entro a falla '. $mail->ErrorInfo);
        $okMessage = "Message has been sent successfully";
        $responseArray = array('type' => 'success', 'message' => $okMessage);
    }


    /*
            
    $emailText = "You have a new message from your contact form\n=============================\n";

    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";

        }
    }
    $logger->info('loop '.$emailText );

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    // Send email
    mail($sendTo, $subject, $emailText, implode("\n", $headers));
    */




    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}
