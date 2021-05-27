<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);
unset($_SESSION["citizen_id"]);
unset($_SESSION["address"]);
unset($_SESSION['police_qr']);
unset($_SESSION["loggedin"]);
unset($_SESSION["code"]);
header("Location:index.php");

?>