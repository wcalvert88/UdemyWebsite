<?php 
if(isset($_POST['submit'])) {
    $to = "wcalvert88@gmail.com";
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = wordwrap($_POST['message'], 70);
    $headers = "From: " . $_POST['email'] . "\r\n" . 'Content-type: text/html; charset=utf-8';
    mail($to, $subject, $message, $headers);
    header("Location: contact.html");
} else {
    header("Location: contact.html");
}

?>