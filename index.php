<?php
    session_start();

    $_SESSION['CONNECTER'] = false;

    header('Location: /controller/crtl_Actualite.php');
?>