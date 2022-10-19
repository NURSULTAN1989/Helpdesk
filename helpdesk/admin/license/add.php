<?php
include("../../bd.php");
{

  $name= $_POST["name"];
  $data= $_POST["data"];
  $treaty= $_POST["treaty"];
  $amount= $_POST["amount"];
  $install= $_POST["install"];

    $errors=false;

    $result = mysqli_query ( $link, "INSERT INTO license (id, name, data, treaty, amount, install )
    VALUES
    ( NULL, '$name', '$data','$treaty', '$amount','$install' )");




        if ($result=='TRUE')
        {
            header("location:../license.php");
        }
        else {
            echo "Ошибка! Вы не смогли оставить вопрос.";
        }}

?>
