<?php
$name = $_POST['nome'];
$email = $_POST['email'];
$message = $_POST['mensagem'];
$formcontent=" De: $name \n Email: $email \n Mensagem: $message \n";
$recipient = "julio.cesar_90@hotmail.com";
$subject = "Contato via site";
$mailheader = "De: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erro!");
echo "Obrigado! ;D" . " -" . "<?php header( 'Location: http://www.portaljf3.net63.net' );?>";
?>