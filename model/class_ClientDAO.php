<?php

    require_once('class_Client.php');

    class ClientDAO {

        private $db;  //> Objet local de la database

        /**********************************
         * Constructeur par defaut de la DAO Client
         */
        public function __construct($path) {
            $database = 'sqlite:'.$path.'client.db';
            try {
                $this->db = new PDO($database);
            } catch (Exception $e) {
                echo "Impossible d'ouvrir la DB\n";
            }
        }

        /************************************
         * Recuperation d'un Client dans base de donnée par son email et son mdp
         */
        function getClient($email, $mdp): Client {
            $sql = 'SELECT mdp FROM user WHERE mail=\''.$email.'\'';
            $client = new Client();
            $query = $this->db->query($sql);
            $resultat = $query->fetch();
            if (password_verify($mdp, $resultat["mdp"])) {
                $sql = 'SELECT * FROM user WHERE mail=\''.$email.'\'';
                $queryClient = $this->db->query($sql);
                $client = $queryClient->fetchAll(PDO::FETCH_CLASS, 'Client')[0];
            } else {
                $client->id = -1;
            }
            return $client;
        }

        /************************************
         * Ajout d'un Client dans la base de donnee
         */
        function setClient(string $nom, string $prenom, $email, $mdp): void {
            $newId = $this->lastClient() + 1;
            $hash = password_hash($mdp, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user VALUES (?, ?, ?, ?, ?, ?)";
            $temp = $this->db->prepare($sql);
            $temp->execute([$newId, $nom, $prenom, $email, $hash, false]);
        }

        /************************************
         * Suppression d'un Client de la base de donnee
         */
        function deleteClient(int $id): void {
            $sql = 'DELETE FROM user WHERE id='.$id;
            $this->db->query($sql);
        }

        /************************************
         * Nombre total de clients dans la base de donnee
         */
        function totalClient(): int {
            $sql = 'SELECT Count(*) FROM user';
            $temp = $this->db->query($sql);
            $int = $temp->fetch()[0];
            return $int;
        }

        /************************************
         * Recuperation de l'identifiant du dernier Client
         */
        function lastClient(): int {
            $sql = 'SELECT Max(id) FROM user';
            $temp = $this->db->query($sql);
            $int = $temp->fetch()[0];
            if ($int == null) {
                $int = -1;
            }
            return $int;
        }

    }

?>