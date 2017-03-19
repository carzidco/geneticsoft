<?php
$to = "carzidco@gmail.com; info@geneticsoftware.net";
$subject = "Info";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = file_get_contents("full_width.html");

$vars = array(
  '{NAME}'       => $name,
  '{EMAIL}'        => $email,
  '{MESSAGE}' => $message
);

$body = strtr($body, $vars);

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@geneticsoftware.net>' . "\r\n";

mail($to,$subject,$body,$headers);
echo "<script>alert('Tu mensaje ha sido enviado satisfactoriamente, Gracias!');</script>";
header("Location: index.html#contact-page");
?>
