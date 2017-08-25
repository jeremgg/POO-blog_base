<?php

    namespace App\Table;

    use App\App;




    class Article extends Table{

        //on stocke le nom de la table des articles
        protected static $table = "articles";



        /**
         * Récupérer la catégorie courante
         * Initialiser la connexion à la BDD et faire la requète avec en paramètre
         * la requète, l'id, le nom de la class appelé et si on veut un seul résultat
         * @param  $id
         * @return array
         */
        public static function find($id){
            return self::query("
                SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
                FROM articles
                LEFT JOIN categories ON category_id = categories.id
                WHERE articles.id = ?
            ", [$id], true);
        }



        /**
         * Récupérer tous les articles avec leurs catégories correspondantes
         * Initialiser la connexion à la BDD et faire la requète de jointure
         * @return array
         */
        public static function getLast(){
            return self::query("
                SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
                FROM articles
                LEFT JOIN categories ON category_id = categories.id
                ORDER BY articles.date DESC
            ");
        }



        /**
         * Récupérer tous les articles de la catégorie correspondante
         * Initialiser la connexion à la BDD et faire la requète de jointure
         * @param  $category_id
         * @return array
         */
        public static function lastByCategory($category_id){  
            return self::query("
                SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
                FROM articles
                LEFT JOIN categories
                    ON category_id = categories.id
                WHERE category_id = ?
                ORDER BY articles.date DESC
            ", [$category_id]);
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
            $html = '<p>' . substr($this->contenu, 0, 250) . '...</p>';   //skocke les 250 premier caractères su contenu
            $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a>';
            return $html;
        }
    }

?>
