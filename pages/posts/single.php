<?php

    use App\App;
    use App\Table\Article;
    use App\Table\Categorie;



    //Stocker l'article en fonction de son id
    $post = Article::find($_GET['id']);


    
    //si la valeur des paramètres URL n'existent pas, on redirige vers la page 404
    if($post === false){
        App::notFound();
    }

    
    
    //Définir le titre de l'article comme valeur dans le titre dans la page
    App::setTitle($post->titre);
?>




<!-- Afficher le titre, la catégorie et le contenu de l'article -->
<h2><?= $post->titre; ?></h2>
<p><em><?= $post->categorie; ?></em></p>
<p><?= $post->contenu; ?></p>

