<?php
include("../../bd.php");
{

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
    $errors=false;

    $result = mysqli_query ( $link, "INSERT INTO distr (id, sk_name, sk_vendor, groups, sk_kind, sk_status, sk_lic, sk_ver, sk_proof, sk_act, sk_desc, sk_path )
    VALUES
    ( NULL, '$sk_name', '$sk_vendor','$groups', '$sk_kind','$sk_status', '$sk_lic','$sk_ver', '$sk_proof','$sk_act', '$sk_desc','$sk_path' )");




        if ($result=='TRUE')
        {
            header("location:../index.php");
        }
        else {
            echo "Ошибка! Вы не смогли оставить вопрос.";
        }}

?>
