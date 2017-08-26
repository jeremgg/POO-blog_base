<?php

    namespace App;



    class App{

        //Propriété qui sauvegarde la connexion à la BDD
        public $title = 'mon super blog';


        //Stocker l'intance de configuration de connexion à la BDD 
        private $db_instance;


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



        /**
         * permettre de faire des instances de class plus facilement
         * @param  $name
         * @return string
         */
        public function getTable($name){
            $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';   // '\\App\\Tables\\' permet de forcer le namespace complet
            return new $class_name();
        }



        /**
         * Récupérer les informations de configuration
         * Stocker la configuration
         * Vérifier que la propriétée $db_instance est vide
         * @return l'instance
         */
        public function getDb(){
            $config = config::getInstance();
            if(is_null($this->db_instance)){
                $this->db_instance = new Database($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
            }

            return $this->db_instance;

        }
    }


?>
