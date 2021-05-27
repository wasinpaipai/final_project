<?php
session_start();
require "vendor/autoload.php";

$qrcode = new QrReader($_FILES['qrimage']['tmp_name']);
$code = $qrcode->text();
$_SESSION['code'] = $code;
echo $_SESSION['code'];
    @header("Location:confirmlock.php");
?>