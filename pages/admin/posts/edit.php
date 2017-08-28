<?php

    //On se connecte à la table des articles
    $postTable = App::getInstance()->getTable('Post');

    



    //Si des données sont envoyées
    if(!empty($_POST)){
        //Modifier l'enregistrement dans la BDD en fonction de l'id
        $result = $postTable->update($_GET['id'], [
            'titre' => $_POST['titre'],
            'contenu' => $_POST['contenu'],
            'category_id' => $_POST['category_id']
        ]);

        if($result){
            ?>
            <div class="alert alert-success">L'article a bien été modifié !</div>
        <?php
        }
    }



    //récupérer l'article en fonction de son id
    $post = $postTable->find($_GET['id']);



    //récupérer les catégories de l'articles
    $categories = App::getInstance()->getTable('Category')->extract('id', 'titre');



    // Initialiser le formulaire
    $form = new \Core\HTML\BootstrapForm($post);

?>




<!-- Affichage du formulaire -->
<form method="post">
    <?= $form->input('titre', 'Titre de l\'article'); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>
    <?= $form->select('category_id', 'Categorie', $categories); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
