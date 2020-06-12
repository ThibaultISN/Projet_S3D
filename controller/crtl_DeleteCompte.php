<?php

    require_once('../config/dataLocation.php');

    require_once('../model/class_Client.php');
    require_once('../model/class_ClientDAO.php');

    $config = parse_ini_file('../config/config.ini');

    $comptes = new ClientDAO($config['database_path']);

    // suppression du compte voulu
    $comptes->deleteClient($_POST['id']);

    header('Location: /controller/crtl_Deconnexion.php');

?>