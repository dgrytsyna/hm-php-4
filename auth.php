<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You did not enter';
    exit;}
 else {
   echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
 }
