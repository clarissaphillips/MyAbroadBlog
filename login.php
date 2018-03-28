<<?php

  $corrUsername = "cmp31";
  $corrPassword = "blog";
  $usr = $_POST['username'];
  $pass = $_POST['password'];

  if ($usr != $corrUsername || $pass != $corrPassword) { //redirect to login.html if info wrong
    header( 'Location: relogin.html' );
  }
  else {
    header( 'Location: addentry.html' );
  }

 ?>
