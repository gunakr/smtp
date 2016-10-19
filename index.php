<?php
require_once "Mail.php";

$from = "EPC <Cloud-EPC@atos.net>";
$to = "Tomar <dharna.tomar@atos.net>";
$subject = "Test email using PHP SMTP\r\n\r\n";
$body = "This is a test email message";

$host = "10.224.210.8";
$port = "25";

$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host, 'port' => $port,
    'auth' => false));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  echo("<p>Message successfully sent!</p>");
}
?>