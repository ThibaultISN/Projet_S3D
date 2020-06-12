<?php

    session_start();

    $_SESSION['CONNECTER'] = false;
    $_SESSION['nom'] = null;
    $_SESSION['prenom'] = null;
    $_SESSION['id'] = null;
    $_SESSION['admin'] = false;

    header('Location: /controller/crtl_User.php');

?>