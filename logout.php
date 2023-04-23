<?php
    session_start();
    if(isset($_SESSION['username']))
        unset($_SESSION['username']);
    if(isset($_SESSION['signed']))
        unset($_SESSION['signed']);
    
    header('location: index.php');
    exit;
?>