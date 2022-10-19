<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
</head>
<body>
    <?php if(!empty($_SESSION['login'])) :?>
    <?php header('Location:/helpdesk/admin/indexadmin.php'); ?>
    <?php else: header('Location:../index.php'); ?>
    <?php endif ?>


</body>
</html>
