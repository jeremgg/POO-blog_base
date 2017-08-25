<?php

    require('../app/Autoloader.php');


    //Chargement de notre autoloader avec la méthode register de la class Autoloader
    App\Autoloader::register();



    //Vérifier qu'une variable url p existe,
    //si c'est le cas on la stocke dans une variable p
    if(isset($_GET['p'])){
        $p = $_GET['p'];
    }
    else{
        $p = 'home';
    }




    //Afficher les contenu des pages chargées
        //tous ce qui est affiché...
        ob_start();

            //Vérifier dans quelle page on veut accéder
            if($p === 'home'){
                require '../pages/home.php';
            }
            elseif($p === 'article'){
                require '../pages/single.php';
            }
            elseif($p === 'categorie'){
                require '../pages/categorie.php';
            }

        //... On le stocke dans une variable...
        $content = ob_get_clean();

        //... Puis on charge le template de page
        require '../pages/templates/default.php';

 ?>
