<?php

    namespace App\Table;

    use App\App;



    class Article{

        public static function getLast(){
            return App::getDb()->query("SELECT * FROM articles", __CLASS__);
        }



        /**
         * Utiliser cette fonction dès que le système tombe sur une fonction qu'il ne connait pas
         * @param  $key
         * @return string
         */
        public function __get($key){
            $method = 'get' . ucfirst($key);
            $this->$key = $this->$method();
            return $this->$key;
        }



        /**
         * Retourner le lien de l'article
         * @return string
         */
        public function getUrl(){
            return 'index.php?p=article&id=' . $this->id;
        }



        /**
         * Affichage de l'extrait et ajout du lien de l'article
         * @return string
         */
        public function getExtrait(){
            $html = '<p>' . substr($this->contenu, 0, 250) . '...</p>';   //skocke les 250 premier caractères du contenu
            $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a>';
            return $html;
        }
    }

?>
