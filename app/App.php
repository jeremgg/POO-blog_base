<?php

    namespace App;



    class App{

        //Propriété qui sauvegarde la connexion à la BDD
        public $title = 'mon super blog';


        //Créer la propriété qui stockera l'instance unique
        private static $_instance;



        /**
         * Méthode statique qui permet d'instancier ou de récupérer l'instance unique
         * Instancier la class si l'instance n'existe pas
         * @return L'instance
         */
        public static function getInstance(){
            if(is_null(self::$_instance)){
                self::$_instance = new App();
            }
            return self::$_instance;

        }
    }


?>
