<!doctype html>
<html lang="en"><body>

<?php

ini_set("include_path", '/home/tempe577/php:' . ini_get("include_path") );
include('Mail.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $secretKey = '6Lc21XYUAAAAANY91hyVuL_rXUnEl8-ymyehp4lb';
  $captcha = $_POST['g-recaptcha-response'];

  if (!$captcha) {
    echo '<p class="alert alert-warning">Please check the captcha form.</p>';
    exit;
  }
  // Generate email
  $recipients = array('secretlysweet24@gmail.com', 'shannonbrea924@gmail.com', 'marlena.pointer@gmail.com');
  $headers['From']= 'info@tempecubscouts.org';
  $headers['To']= 'Cubmaster Janeen Carter';
  $headers['Subject'] = 'New Message from Contact Form';
  $body = "Name: " . $_POST["name"] . "\n" . "Email: " . $_POST["email"] . "\n" . "Phone: " . $_POST["phone"] . "\n" . "Grade: " . $_POST["grade"] . "\n" . "Message: " . $_POST["message"];

  $ip = $_SERVER['REMOTE_ADDR'];
  $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
  $responseKeys = json_decode($response,true);

  // Send email
  if(intval($responseKeys["success"]) !== 1) {
    echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
  } else {
      $params['host'] = 'localhost';
      $params['port'] = '25';
      $params['auth'] = 'PLAIN';
      $params['username'] = 'info@tempecubscouts.org';
      $params['password'] = 'InfoPack577';

      $mail_object =& Mail::factory('mail', $params);

      $mail_object->send($recipients, $headers, $body);

      if (PEAR::isError($mail)) {
        echo("<p>" . $mail->getMessage() . "</p>");
      } else {
          echo("<p>Thank you. We will get back to you shortly!</p>");
      }
    }
}

?>
</body></html>
