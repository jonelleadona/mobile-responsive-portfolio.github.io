<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  // $submit = $_POST['submit'];

  $mailTo = "jonelle.adona@knights.ucf.edu";
  $headers = "From: ".$email;
  $txt = "You have recieved an email from ".$name.".\n\n".$message;

  mail($mailTo, $txt, $headers );
  header("Location: index.php?mailsend")

}