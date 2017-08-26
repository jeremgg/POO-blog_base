<?php

    namespace App;



    class Config{

        //Créer un tableau vide qui contiendra les données de configuration
        private $settings = [];


        //Créer la propriété qui stockera l'instance unique
        private static $_instance;




        /**
         * Méthode statique qui permet d'instancier ou de récupérer l'instance unique
         * Instancier la class si l'instance n'existe pas au niveaux de la propriété statique $_instance
         * @return retourner l'instance
         */
        public static function getInstance(){
            if(is_null(self::$_instance)){
                self::$_instance = new Config();
            }
            return self::$_instance;   

        }



        /**
         * Lire le ficher de configuration et ajouter les données de configuration à la propriété settings
         */
        public function __construct(){
            $this->id = uniqid();  //générer une clé unique
            $this->settings = require dirname(__DIR__) . '/config/config.php';   //charger le fichier config.php. 
        }



        /**
         * stocker les éléments de configuration en fonction de son paramètre
         * Si le paramètre entré n'existe pas retourner null
         * @param  $key
         * @return string
         */
        public function get($key){
            if(!isset($this->settings[$key])){
                return null;
            }

            return $this->settings[$key];

        }


    }



?>
