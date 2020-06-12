<?php

    require_once('../config/dataLocation.php');

    require_once('../model/class_Client.php');
    require_once('../model/class_ClientDAO.php');

    $config = parse_ini_file('../config/config.ini');

    $clients = new ClientDAO($config['database_path']);

    $clients->setClient($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp']);

    header('Location: /controller/crtl_User.php');

?>