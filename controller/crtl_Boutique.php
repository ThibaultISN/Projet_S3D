<?php

    require_once('../config/dataLocation.php');

    require_once('../model/class_ArticleBoutique.php');
    require_once('../model/class_BoutiqueDAO.php');

    $config = parse_ini_file('../config/config.ini');

    // Construction de la db de boutiqueDAO
    $articles = new BoutiqueDAO($config['database_path']);

    $totalArticle = $articles->totalArticleBoutique() - 1;

    /****************
     * Preparation d'un tableau contenant tous les articles boutique
     */
    for ($i = $totalArticle; $i >= 0; $i--) {
        $article = $articles->getArticleBoutique($i);
        $article->img = $imgPath.$article->img;
        $list[$i] = $article;
    }

    include("$ROOT/view/view_Boutique.php");

?>