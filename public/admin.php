<?php

    use Core\Auth\DBAuth;



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




    //Vérifier que l'utilisateur est connecté
    $app = App::getInstance();
    $auth = new DBAuth($app->getDb());
    if(!$auth->logged()){
        $app ->forbidden();
    }




    //Afficher les contenu des pages chargées
        //tous ce qui est affiché...
        ob_start();

            //Vérifier dans quelle page on veut accéder
            if($page === 'home'){
                require ROOT . '/pages/admin/posts/index.php';
             }
            elseif($page === 'posts.edit'){
                require ROOT . '/pages/admin/posts/edit.php';
            }
            elseif($page === 'posts.add'){
                require ROOT . '/pages/admin/posts/add.php';
            }
            elseif($page === 'posts.delete'){
                require ROOT . '/pages/admin/posts/delete.php';
            }
            elseif($page === 'categories.index'){
                require ROOT . '/pages/admin/categories/index.php';
            }
            elseif($page === 'categories.edit'){
                require ROOT . '/pages/admin/categories/edit.php';
            }
            elseif($page === 'categories.add'){
                require ROOT . '/pages/admin/categories/add.php';
            }
            elseif($page === 'categories.delete'){
                require ROOT . '/pages/admin/categories/delete.php';
            }

        //... On le stocke dans une variable...
        $content = ob_get_clean();

        //... Puis on charge le template de page
        require ROOT . '/pages/templates/default.php';


?>
