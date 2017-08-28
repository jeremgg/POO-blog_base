
<?php

    $app = App::getInstance();
    

    //Stocker l'article en fonction de son id
    $post =  $app->getTable('Post')->findWitdhCategory($_GET['id']);

    
    //si la valeur des paramètres URL n'existent pas, on redirige vers la page 404
    if($post === false){
        $app->notFound();
    }

    
    //Définir le titre de l'article comme valeur dans le titre dans la page
    $app->title = $post->titre ;
?>




<!-- Afficher le titre, la catégorie et le contenu de l'article -->
<h2><?= $post->titre; ?></h2>
<p><em><?= $post->categorie; ?></em></p>
<p><?= $post->contenu; ?></p>


