<?php
    if(isset($_COOKIE["tlogin"])){
        setcookie("tlogin","");
        header("location:T_Login.php");
    }
    else{
        header("location:T_Login.php");
    }
?>