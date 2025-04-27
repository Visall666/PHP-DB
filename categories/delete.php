<?php
    session_start();
    include('../config.php');
    include('../function.php');

    $id = $_GET['id'];
    $sql = "delete from categories where id = $id";
    
    $x = non_query($sql);
    if ($x) {
        $_SESSION['success'] = true;
        header('location: index.php');
    }
?>