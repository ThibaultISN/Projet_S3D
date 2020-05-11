<?php

    require_once('class_Article.php');

    class ArticleDAO {

        private $db;  //> Objet local de la database

        /**********************************
         * Contstreur par defaut de la DAO d'Article
         */
        public function __construct($path) {
            $database = 'sqlite:'.$path.'/article.db';
            try {
                $this->db = new PDO($database);
            } catch (Exception $e) {
                echo "Impossible d'ouvrir la DB\n", $e;
            }
        }

        /************************************
         * Recuperation d'un item de la base de donnée par son identifiant
         */
        function get(int $id): Article {
            $sql = 'SELECT * FROM article WHERE id='.$id;
            $article = new Article();
            $temp = $this->db->query($sql);
            $article = $temp->fetchAll(PDO::FETCH_CLASS, 'Article')[0];
            return $article;
        }

    }

?>