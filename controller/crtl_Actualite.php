<?php

    require_once('../model/class_Article.php');
    require_once('../model/class_ArticleDAO.php');

    $config = parse_ini_file('../config/config.ini');

    $articles = new ArticleDAO($config['database_path']);

    for ($i = 0; $i < 2; $i++) {
        $article = $articles->get($i);
        $article->img = $config['data_url'].$article->img;
        $list[$i] = $article;
    }

    include('../framework/class_View.php');
    $view = new View('view_Actualite.php');
    $view->list = $list;

    $view->show();
?>