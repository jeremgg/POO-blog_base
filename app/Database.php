<?php

    namespace App;

    use \PDO;   //utiliser la class PDO en dehors du namespace App



    class Database{

        //Initialiser les paramètres de connexion à la BDD
        private $db_name;
        private $db_user;
        private $db_pass;
        private $db_host;

        //stocker les paramètres de connexions
        private $pdo;



        /**
         * définir les paramètres de connexion à la BDD
         * @param string $db_name
         * @param string $db_user
         * @param string $db_pass
         * @param string $db_host
         */
        public function __construct($db_name, $db_user = 'root', $db_pass = 'root', $db_host = 'localhost'){

            //Initialiser les paramètres de connexion à la BDD en fonction des paramètre du constructeur
            $this->db_name = $db_name;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
            $this->db_host = $db_host;
        }



        /**
         * Générer le PDO
         * @return string  la propriété pdo
         */
        private function getPDO(){

            //si le connexion à la BDD n'est pas établi
            if($this->pdo === null){
                //Créer une instance de l'objet PDO
                $pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', 'root');

                //Afficher les erreur sql
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //stocker la fonction dans l'instance
                $this->pdo = $pdo;
            }

            return $this->pdo;
        }



        /**
         * Récupérer les résultats de la requète
         * @param  $statement  la requète sql à effectuer
         * @param  class_name  le nom de la class
         * @return string
         */
        public function query($statement, $class_name){
            $req = $this->getPDO()->query($statement);    //stocker tous les articles.
            $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);   //récupérer les résultats
            return $datas;
        }



        /**
         * Afficher L'article correspond à la variable URL id
         * @param  $statement   la requète sql à effectuer
         * @param  $attributes   la variable URL id
         * @param  $class_name   le nom de la class
         * @param  boolean $one  le nombre d'articles à afficher
         * @return string
         */
        public function prepare($statement, $attributes, $class_name, $one = false){
            $req = $this->getPDO()->prepare($statement);   //définit une requête préparé
            $req->execute($attributes);   //exécuter la requète en fonction des paramètres de la requète
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);   //récupère les résultats

            //Si on veut afficher un seul article
            if($one){
                $datas = $req->fetch();
            }
            //sinon on affiche tous les résultats
            else{
                $datas = $req->fetchAll();
            }
            return $datas;
        }
    }

?>
