<?php

    require_once('../config/dataLocation.php');

    require_once('../model/class_ArticleBoutique.php');
    require_once('../model/class_BoutiqueDAO.php');

    $config = parse_ini_file('../config/config.ini');

    $articles = new BoutiqueDAO($config['database_path']);

    // suppression de l'article voulu
    $articles->deleteArticleBoutique($_POST['id']);

    header('Location: /controller/crtl_Boutique.php');

?>