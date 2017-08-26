<?php

    namespace App\Table;



    class Table{

      //Stocker le nom de la table
      protected $table;


        /**
       * deviner le nom de la table à partir du nom de la class
       * Si le nom de la table ($table) est vide
       * couper le nom de la class en plusieurs parties. 
       * stocker le dernier élément du tableau $parts
       * mettre le nom de la class en minuscule et remplacer le mot table par du vide
       */
        public function __construct(){
            if(is_null($this->table)){
                $parts = explode('\\', get_class($this));
                $class_name = end($parts);
                $this->table = strtolower(str_replace('Table', '', $class_name));  
            }
        }

    }

?>
