<?php

    require('../app/Autoloader.php');


    //Chargement de notre autoloader avec la méthode register de la class Autoloader
    App\Autoloader::register();


    //Récupérer l'instance unique de configuration
    $app = App\App::getInstance();


    //Récupérer le nom de la table
    $posts = $app->getTable('Posts');
    $users = $app->getTable('Categories');
    $categories = $app->getTable('Users');


    //Récupérer le nom de la table
    var_dump($posts);
    var_dump($users);
    var_dump($categories);

 ?>
