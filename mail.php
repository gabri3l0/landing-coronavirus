<?php
$to      = 'creadoreswebmty@gmail.com';
$subject = 'Apply';
$message = $_REQUEST['work'];
$headers = 'From: '.$_REQUEST['email'];

// echo $to.'<br>';
// echo $subject.'<br>';
// echo $message.'<br>';
// echo $headers.'<br>';
mail($to, $subject, $message, $headers);

?> 