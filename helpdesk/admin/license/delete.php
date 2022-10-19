<?php
include ("../../bd.php");

$id = $_GET["id"];

$result = mysqli_query ( $link, "
   DELETE FROM license WHERE id= '$id'");
if ($result=='TRUE')
{ header("location: ../license.php");
    echo "Удалено";
}
else {
    echo "Ошибка!";
}
