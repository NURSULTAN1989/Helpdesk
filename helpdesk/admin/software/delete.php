<?php
include ("../../bd.php");

$id = $_GET["id"];

$result = mysqli_query ( $link, "
   DELETE FROM distr WHERE id= '$id'");
if ($result=='TRUE')
{ header("location: ../index.php");
    echo "Удалено";
}
else {
    echo "Ошибка!";
}
