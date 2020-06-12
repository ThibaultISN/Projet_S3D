<?php

    session_start();

    require_once('../config/dataLocation.php');

    require_once('../model/class_Client.php');
    require_once('../model/class_ClientDAO.php');

    $config = parse_ini_file('../config/config.ini');

    $clients = new ClientDAO($config['database_path']);

    $client = $clients->getClient($_POST['email'], $_POST['mdp']);

    if ($client->id != -1) {
        $_SESSION['CONNECTER'] = true;
        $_SESSION['nom'] = $client->nom;
        $_SESSION['prenom'] = $client->prenom;
        $_SESSION['admin'] = $client->admin;
        $_SESSION['id'] = $client->id;
    }

    header('Location: /controller/crtl_User.php');

?>