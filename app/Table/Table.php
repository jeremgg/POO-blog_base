<?php

    namespace App\Table;

    use App\App;




    class Table{

        /**
         * Récupérer la catégorie courante
         * Initialiser la connexion à la BDD et faire la requète avec en paramètre
         * la requète, l'id, le nom de la class appelé et si on veut un seul résultat
         * @param  $id
         * @return array
         */
        public static function find($id){
            return static::query("
                SELECT *
                FROM " . static::$table . "
                WHERE id = ?
            ", [$id], true);
        }



        /**
         * Définir le type de requète (query ou prepare)
         * Si on a des attributs ce sera une requète préparée, sinon ce sera une requète standard
         * @param  $statement  la requète sql à effectuer
         * @param  $attributes la variable URL
         * @param  $class_name le nom de la class
         * @param  boolean $one Afficher un ou plusieurs résultats
         * @return array
         */
        public static function query($statement, $attributes = null, $one = false){
            if($attributes){
                return App::getDb()->prepare($statement, $attributes, get_called_class(), $one);
            }
            else{
                return App::getDb()->query($statement, get_called_class(), $one);
            }
        }



        /**
         * Récupérer toutes les catégories
         * Initialiser la connexion à la BDD et faire la requète
         * @return array
         */
        public static function all(){          
            return App::getDb()->query("
                SELECT *
                FROM " . static::$table . "
            ", get_called_class());
        }



        /**
         * Utiliser cette fonction dès que le système tombe sur une fonction qu'il ne connait pas
         * Définir la fonction en get suivi du nom de la fonction qui n'existe pas avec la 1ère lettre en majuscule
         * @param  $key  le nom de la fonction qui n'existe pas
         * @return string
         */
        public function __get($key){
            $method = 'get' . ucfirst($key);  
            $this->$key = $this->$method();   //éviter que la méthode soit appelé tous le temps
            return $this->$key;
        }
    }
?>
