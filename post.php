<?php
$to = "anilshrestha711@gmail.com";
$email = "My subject";
$pass = "Hello world!";
$headers = "From: $to = "anilshrestha711@gmail.com";
" . "\r\n" .
"CC: $to = "anilshrestha711@gmail.com";
";

mail($to,$email,$pass,$headers);
?>
