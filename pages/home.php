<!-- AFFICHER LES ARTICLES  -->
<?php
    //Lister les articles et les stocker dans une variable post
    foreach (\App\Table\Article::getLast() as $post) :
?>
        <!-- Afficher les articles -->
        <h2><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2>
        <p><?= $post->extrait; ?></p>

<?php endforeach; ?>
 
