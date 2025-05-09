<?php
    session_start();
    include('../config.php');
    include('../function.php');

    $id = $_GET['id'];
    $sql = "update roles set active=0 where id=$id";
    
    $x = non_query($sql);
    if ($x) {
        $_SESSION['success'] = DEL_SUCCESS_SMS;
        header('location: index.php');
    }
    else{
        $_SESSION['error'] = DEL_ERROR_SMS;
        header('location: index.php');
    }
?>