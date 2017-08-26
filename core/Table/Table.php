<?php

    namespace Core\Table;

    use Core\Database\Database;



    class Table{

      //Stocker le nom de la table
      protected $table;


      //stocker la connexion à la BDD au niveau de l'instance
      protected $db;



      /**
       * deviner le nom de la table à partir du nom de la class
       * Si le nom de la table ($table) est vide
       * couper le nom de la class en plusieurs parties. 
       * stocker le dernier élément du tableau $parts
       * mettre le nom de la class en minuscule et remplacer le mot table par du vide
       */
        public function __construct(Database $db){
            $this->db = $db;
            if(is_null($this->table)){
                $parts = explode('\\', get_class($this));
                $class_name = end($parts);
                $this->table = strtolower(str_replace('Table', '', $class_name));
            }
        }



      /**
       * Récupérer tous les articles
       * @return string  la requète sql
       */
      public function all(){
          return $this->db->query('SELECT * FROM articles');
      }



      /**
        * Définir le type de requète (query ou prepare)
        * Si on a des attributs ce sera une requète préparée, sinon ce sera une requète standard
        * @param  $statement  la requète sql à effectuer
        * @param  $attributes la variable URL
        * @param  boolean $one Afficher un ou plusieurs résultats
        * @return array
        */
        public function query($statement, $attributes = null, $one = false){
            if($attributes){
                return $this->db->prepare(
                    $statement,
                    $attributes,
                    str_replace('Table', 'Entity', get_class($this)),  //Remplacer Table par Entity dans le nom de class
                    $one
                );
            }
            else{
                return $this->db->query(
                    $statement,
                    str_replace('Table', 'Entity', get_class($this)),  //Remplacer Table par Entity dans le nom de class
                    $one
                );
            }
        }

    }

?>
