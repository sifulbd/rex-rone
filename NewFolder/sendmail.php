<?php
$subject = 'Contact from King Tree';
$message = 'Name: '.$_POST['yourName'].'<br/>'.
'Email: '.$_POST['email'].'<br/>'.
'Telephone: '.$_POST['telephone'].'<br/>'.
'Message: '.$_POST['message'].'<br/>';
//echo $message;
$headers = 'From: noreply@kingtree.ie' . "\r\n" .
    'Reply-To: noreply@kingtree.ie' . "\r\n" .
    'X-Mailer: PHP/' . phpversion()."\r\n".
    "Content-type:text/html;charset=UTF-8" . "\r\n";;
mail('info@kingtree.ie', $subject, $message, $headers);
header("Location: thank-you.html");
?>