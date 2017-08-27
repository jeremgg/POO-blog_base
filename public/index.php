<?php

    //constante qui définit la racine de l'application
	define('ROOT', dirname(__DIR__));

    
    //Chargement de la class App
    require ROOT . '/app/App.php';
    

    //Chargement de notre autoloader
    App::load();




    //Vérifier qu'une variable url p existe,
    //si c'est le cas on la stocke dans une variable p
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }
    else{
        $page = 'home';
    }




    //Afficher les contenu des pages chargées
        //tous ce qui est affiché...
        ob_start();

                //Vérifier dans quelle page on veut accéder
                if($page === 'home'){
                    require ROOT . '/pages/posts/home.php';
                }
                elseif($page === 'posts.category'){
                    require ROOT . '/pages/posts/category.php';
                }
                elseif($page === 'posts.single'){
                    require ROOT . '/pages/posts/single.php';
                }

        //... On le stocke dans une variable...
        $content = ob_get_clean();

        //... Puis on charge le template de page
        require ROOT . '/pages/templates/default.php';


?>
