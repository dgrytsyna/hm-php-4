<?php
include_once 'auth.php';
 $user_credentials = array();
     $pass_hash = password_hash(($_SERVER['PHP_AUTH_USER']), PASSWORD_DEFAULT);
     $user_name = $_SERVER['PHP_AUTH_USER'];
     $user_credentials[$user_name] = $pass_hash;
   //  print_r( $user_credentials);
 

