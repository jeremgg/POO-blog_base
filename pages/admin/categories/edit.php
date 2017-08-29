<?php

    //On se connecte à la table des catégories
    $table = App::getInstance()->getTable('Category');

    

    //Si des données sont envoyées
    if(!empty($_POST)){
        $result = $table->update($_GET['id'], [
            'titre' => $_POST['titre']
        ]);

        if($result){
            ?>
            <div class="alert alert-success">La catégorie a bien été modifiée !</div>
        <?php
        }
    }



    //récupérer l'article en fonction de son id
    $categorie = $table->find($_GET['id']);
    


    //Initialiser le formulaire
    $form = new \Core\HTML\BootstrapForm($categorie);
?>



<!-- Affichage du formulaire -->
<form method="post">
    <?= $form->input('titre', 'Titre de la catégorie'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
