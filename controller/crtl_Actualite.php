<?php

    require_once('../config/dataLocation.php');

    require_once('../model/class_Article.php');
    require_once('../model/class_ArticleDAO.php');

    $config = parse_ini_file('../config/config.ini');

    // Construction de la db d'articleDAO
    $articles = new ArticleDAO($config['database_path']);

    $totalArticle = $articles->totalArticle() - 1;

    /****************
     * Preparation d'un tableau contenant tous les articles
     */
    for ($i = $totalArticle; $i >= 0; $i--) {
        $article = $articles->getArticle($i);
        $article->img = $imgPath.$article->img;
        $list[$i] = $article;
    }

    include("$ROOT/view/view_Actualite.php");

?>