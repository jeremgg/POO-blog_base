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



        /**
         * Initialiser la connexion à la BDD
         */
        public static function getDb(){
            //si la connexion à la BDD n'est pas effective
            if(self::$database === null){
                //stocker une instance de connexion à la BDD dans la variable static database
                 self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
            }

            return self::$database;
        }
    }


?>
