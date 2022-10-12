<?php
$subject    = 'E-mail from portfolio'; // Subject of your email
$to         = 'hamidouche.asmae@gmail.com'; //Your e-mail address
$headers    = 'MIME-Version: 1.0' . "\r\n" .
              'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message    = 'Name: ' . $_POST['name'] . ' <br/>' .
              'E-mail: ' . $_POST['email'] . ' <br/>' .
              'Phone: ' . $_POST['phone'] . ' <br/>' .
              'Website: ' . $_POST['website'] . ' <br/>' .
              'Message: ' . $_POST['message'];

if (@mail($to, $subject, $message, $headers))
{
  echo 'sent';
}
else
{
  echo 'failed';
}




session_start();
    
if(!empty($_POST["send"])) {
  $Name = $_POST["name"];
  $E-mail = $_POST["email"];
  $Phone = $_POST["phone"];
  $Website = $_POST["website"];
  $Message = $_POST["message"];
  $captcha = $_POST["captcha"];

  $captchaUser = filter_var($_POST["captcha"], FILTER_SANITIZE_STRING);

  if(empty($captcha)) {
    $captchaError = array(
      "status" => "alert-danger",
      "message" => "Please enter the captcha."
    );
  }
  else if($_SESSION['CAPTCHA_CODE'] == $captchaUser){
    $captchaError = array(
      "status" => "alert-success",
      "message" => "Your form has been submitted successfuly."
    );
  } else {
    $captchaError = array(
      "status" => "alert-danger",
      "message" => "Captcha is invalid."
    );
  }
}  

?>

