<?php
    session_start();

    if(isset($_SESSION['privalige']))
    {
        unset($_SESSION['privalige']);
    }
    session_destroy();
    header("Location: Home.php");
?>