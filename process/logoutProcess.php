<?php
    ob_start();
    session_start();
    session_abort();
    header("location: ../page/loginPage.php");
?>