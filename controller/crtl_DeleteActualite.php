<?php

    require_once('../config/dataLocation.php');

    require_once('../model/class_Article.php');
    require_once('../model/class_ArticleDAO.php');

    $config = parse_ini_file('../config/config.ini');

    $articles = new ArticleDAO($config['database_path']);

    // suppression de l'article voulu
    $articles->deleteArticle($_POST['id']);

    header('Location: /controller/crtl_Actualite.php');

?>