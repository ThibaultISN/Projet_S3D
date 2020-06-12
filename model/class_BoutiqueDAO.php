<?php

    require_once('class_ArticleBoutique.php');

    class BoutiqueDAO {

        private $db;  //> Objet local de la database

        /**********************************
         * Constructeur par defaut de la DAO Boutique
         */
        public function __construct($path) {
            $database = 'sqlite:'.$path.'boutique.db';
            try {
                $this->db = new PDO($database);
            } catch (Exception $e) {
                echo "Impossible d'ouvrir la DB\n";
            }
        }

        /************************************
         * Recuperation d'un Article Boutique dans base de donnée par son identifiant
         */
        function getArticleBoutique(int $id): ArticleBoutique {
            $sql = 'SELECT * FROM boutique WHERE id='.$id;
            $articleBoutique = new ArticleBoutique();
            $temp = $this->db->query($sql);
            $articleBoutique = $temp->fetchAll(PDO::FETCH_CLASS, 'ArticleBoutique')[0];
            return $articleBoutique;
        }

        /************************************
         * Ajout d'un Article Boutique dans la base de donnee
         */
        function setArticleBoutique(string $titre, string $description, int $prix, string $img): void {
            $newId = $this->lastArticleBoutique() + 1;
            $sql = "INSERT INTO boutique VALUES (?, ?, ?, ?, ?)";
            $temp = $this->db->prepare($sql);
            $temp->execute([$newId, $titre, $description, $prix, $img]);
        }

        /************************************
         * Suppression d'un Article Boutique de la base de donnee
         */
        function deleteArticleBoutique(int $id): void {
            $sql = 'DELETE FROM boutique WHERE id='.$id;
            $this->db->query($sql);
        }

        /************************************
         * Nombre total d'articles boutique dans la base de donnee
         */
        function totalArticleBoutique(): int {
            $sql = 'SELECT Count(*) FROM boutique';
            $temp = $this->db->query($sql);
            $int = $temp->fetch()[0];
            return $int;
        }

        /************************************
         * Recuperation de l'identifiant du dernier Article Boutique
         */
        function lastArticleBoutique(): int {
            $sql = 'SELECT Max(id) FROM boutique';
            $temp = $this->db->query($sql);
            $int = $temp->fetch()[0];
            if ($int == null) {
                $int = -1;
            }
            return $int;
        }
    }

?>