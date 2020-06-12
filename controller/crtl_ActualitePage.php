<?php

    require_once('../config/dataLocation.php');

    require_once('../model/class_Article.php');
    require_once('../model/class_ArticleDAO.php');

    $config = parse_ini_file('../config/config.ini');

    $articles = new ArticleDAO($config['database_path']);

    // recuperation de l'article a afficher
    $article = $articles->getArticle($_POST['id']);

    // chemin absolue vers l'image
    $article->img = $imgPath.$article->img;

    include("$ROOT/view/view_ActualitePage.php");

?>