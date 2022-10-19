<?php
include ("../../bd.php");

$name= $_POST["name"];
$data= $_POST["data"];
$treaty= $_POST["treaty"];
$amount= $_POST["amount"];
$install= $_POST["install"];

$id = $_GET["id"];

$result = mysqli_query ( $link, "
   UPDATE license SET

     name  = '$name',
     data = '$data',
     treaty = '$treaty',
     amount = '$amount',
     install = '$install'

    WHERE id = '$id'");
if ($result=='TRUE')
{ header("location: ../license.php");
    echo "Изменено";
}
else {
    echo "Ошибка!";
}
