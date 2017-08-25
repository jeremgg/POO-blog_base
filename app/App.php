<?php

    namespace App;



    class App{

        //Définir les constantes de connexion
        const DB_NAME =  'blog';
        const DB_USER =  'root';
        const DB_PASS =  'root';
        const DB_HOST =  'localhost';


        //Propiété qui sauvegarde la connexion à la BDD
        private static $database;


        //propriété qui stocke le nom de la page
        private static $title = 'mon super site';



        /**
         * Initialiser la connexion à la BDD
         * Si la connexion à la BDD n'est pas effective
         * stocker une instance de connexion à la BDD dans la variable static database
         */
        public static function getDb(){
            if(self::$database === null){
                 self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
            }
            return self::$database;
        }



        /**
         * Rediriger vers la page 404
         */
        public static function notFound(){
            header("HTTP/1.O 404 Not Found");
            header("location: index.php?p=404");
        }


        /**
         * Retourner le titre de l'article dans le titre de la page
         * @return string
         */
        public static function getTitle(){
            return self::$title;
        }



        /**
         * Ajouter le titre de l'article dans le titre de la page
         * @return string
         */
        public static function setTitle($title){
            self::$title = $title . ' | ' . self::$title;
        }
    }


?>
