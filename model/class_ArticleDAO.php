<?php

    require_once('class_Article.php');

    class ArticleDAO {

        private $db;  //> Objet local de la database

        /**********************************
         * Constructeur par defaut de la DAO d'Article
         */
        public function __construct($path) {
            $database = 'sqlite:'.$path.'article.db';
            try {
                $this->db = new PDO($database);
            } catch (Exception $e) {
                echo "Impossible d'ouvrir la DB\n";
            }
        }

        /************************************
         * Recuperation d'un Article dans base de donnée par son identifiant
         */
        function getArticle(int $id): Article {
            $sql = 'SELECT * FROM article WHERE id='.$id;
            $article = new Article();
            $temp = $this->db->query($sql);
            $article = $temp->fetchAll(PDO::FETCH_CLASS, 'Article')[0];
            return $article;
        }

        /************************************
         * Ajout d'un Article dans la base de donnee
         */
        function setArticle(string $titre, string $contenu, string $img): void {
            $newId = $this->lastArticle() + 1;
            $date = date('y-m-j');
            $sql = "INSERT INTO article VALUES (?, ?, ?, ?, ?)";
            $temp = $this->db->prepare($sql);
            $temp->execute([$newId, $date, $titre, $contenu, $img]);
        }

        /************************************
         * Suppression d'un Article de la base de donnee
         */
        function deleteArticle(int $id): void {
            $sql = 'DELETE FROM article WHERE id='.$id;
            $this->db->query($sql);
        }

        /************************************
         * Nombre total d'articles dans la base de donnee
         */
        function totalArticle(): int {
            $sql = 'SELECT Count(*) FROM article';
            $temp = $this->db->query($sql);
            $int = $temp->fetch()[0];
            return $int;
        }

        /************************************
         * Recuperation de l'identifiant du dernier Article
         */
        function lastArticle(): int {
            $sql = 'SELECT MAX(id) FROM article';
            $temp = $this->db->query($sql);
            $int = $temp->fetch()[0];
            if ($int == null) {
                $int = -1;
            }
            return $int;
        }

    }

?>