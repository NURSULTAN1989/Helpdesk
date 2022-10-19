<?php
$link = mysqli_connect("localhost", "root", "", "infobase");

if ($link == false){
    print("error" . mysqli_connect_error());
}
?>