<?php
$to = "bvsaikiranrocks@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: bvsaikiranrocks@gmail.com" . "\r\n" .
"CC: bvsaikiranrocks@gmail.com";

ini_set('SMTP', "74.125.68.109");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "bvsaikiranrocks@gmail.com");
mail($to,$subject,$txt,$headers);
?> 