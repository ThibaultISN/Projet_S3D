<?php

    require_once('../config/dataLocation.php');

    require_once('../model/class_ArticleBoutique.php');
    require_once('../model/class_BoutiqueDAO.php');

    $config = parse_ini_file('../config/config.ini');

    $articles = new BoutiqueDAO($config['database_path']);

    // recuperation de l'article a afficher
    $article = $articles->getArticleBoutique($_POST['id']);

    // chemin absolue vers l'image
    $article->img = $imgPath.$article->img;

    include("$ROOT/view/view_BoutiquePage.php");

?>