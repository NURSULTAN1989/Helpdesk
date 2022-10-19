<?php
include ("../../bd.php");

$sk_name= $_POST["sk_name"];
$sk_vendor= $_POST["sk_vendor"];
$groups= $_POST["groups"];
$sk_kind= $_POST["sk_kind"];
$sk_status= $_POST["sk_status"];
$sk_lic= $_POST["sk_lic"];
$sk_ver= $_POST["sk_ver"];
$sk_proof= $_POST["sk_proof"];
$sk_act= $_POST['sk_act'];
$sk_desc= $_POST['sk_desc'];
$sk_path= $_POST['sk_path'];
$id = $_GET["id"];

$result = mysqli_query ( $link, "
   UPDATE distr SET

     sk_name  = '$sk_name',
     sk_vendor = '$sk_vendor',
     groups = '$groups',
     sk_kind = '$sk_kind',
     sk_status = '$sk_status',
     sk_lic = '$sk_lic',
     sk_ver = '$sk_ver',
     sk_proof = '$sk_proof',
     sk_act = '$sk_act',
     sk_desc = '$sk_desc',
     sk_path = '$sk_path'

    WHERE id = '$id'");
if ($result=='TRUE')
{ header("location: ../index.php");
    echo "Изменено";
}
else {
    echo "Ошибка!";
}
