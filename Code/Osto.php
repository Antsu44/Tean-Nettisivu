<?php

  $email_to = "antsukoo@gmail.com";
  $subject = "Ostopyynto";
  $message = "Test test test!";

  $headers = "From: antsukoo@gmail.com";

  $result = mail($email_to, $subject, $message, $headers);

?>
