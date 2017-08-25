<?php

    namespace App\Table;



    class Article{

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
