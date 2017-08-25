<?php

    namespace App\Table;

    use App\App;




    class Categorie extends Table{

        //on stocke le nom de la table des catégories
        protected static $table = 'categories';



        /**
         * Retourner le lien de la categorie
         * @return string
         */
        public function getUrl(){
            return 'index.php?p=categorie&id=' . $this->id;
        }
    }
?>
