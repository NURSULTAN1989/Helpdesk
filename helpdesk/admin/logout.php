<?php 
session_start();
unset($_SESSION['login']);
header('Location:/helpdesk/index.php');
?>
