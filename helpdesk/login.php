<?php 
include ("bd.php");
if(empty($_POST['login'])){
    $login=$_POST['email'];
    $pass=$_POST['password'];
    $sql = "SELECT * FROM user WHERE login = '$login' AND password = '$pass'";
    if ($result = mysqli_query($link,$sql)) {
        if (mysqli_num_rows($result)>0){
            session_start();
            $_SESSION['login']=$login;
            echo "success";
        } else {
            echo "fail";
        }
        mysqli_free_result($result);
    }
}else echo "error";
?>