<!-- AFFICHER L'ARTICLE EN FONCTION DE SON IDENTIFIANT -->

<?php
    //Récupérer l'article en fonction de son id
    $post = $db->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);
?>



<!-- Afficher le titre et le contenu de l'article -->
<h2><?= $post->titre; ?></h2>
<p><?= $post->contenu; ?></p>
