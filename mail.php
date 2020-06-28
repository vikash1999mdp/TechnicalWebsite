<?php
$to = "vikash1999mdp@gmaill.com";
$subject = "ABCD";
$message = "ZYXW";
$headers = "From : vikash1999mdp@github.io";

if (mail($to, $subject, $message, $headers)) {
    echo "mail send successfull";
} else {
    echo "cannot";
}
?>