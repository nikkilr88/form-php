<?php

$to = "youremail@example.com";
$from = "noreply@notify.com";
$subject = $_POST['subject'];
$message = $_POST['message'];

$retval = mail ($to, $subject, $message, 'From:'.$from);

if($retval == true) {
    echo 'Message sent successfully! <br /> <a href="index.html">Back</a>';

} else {
    echo 'Uh-oh! Message could not be sent. <br /> <a href="index.html">Back</a>';
}

?>