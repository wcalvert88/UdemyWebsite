<?php 
if(isset($_POST['submit'])) {
    mail($to, $subject, $message, $headers);
}

?>