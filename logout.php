<?php
    //����session
    session_start();
    //����session
    session_unset();
    session_destroy();
    //��ת��login.php
    header("Location:login.php");
?>