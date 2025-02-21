<?php
session_start();
session_destroy();
$admin = "SMS12345";
$hash = password_hash($admin,PASSWORD_DEFAULT);
echo $hash;

?>