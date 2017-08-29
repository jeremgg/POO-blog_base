<?php

    //On se connecte à la table des catégories
    $table = App::getInstance()->getTable('Category');

    

    //Si des données sont envoyées
    if(!empty($_POST)){
        //Ajouter l'enregistrement dans la BDD en fonction de l'id
        $result = $table->create([
            'titre' => $_POST['titre']
        ]);

        if($result){
            header('location: admin.php?p=categories.index');
        }
    }

    

    //Initialiser le formulaire
    $form = new \Core\HTML\BootstrapForm($_POST);
?>




<!-- Affichage du formulaire -->
<form method="post">
    <?= $form->input('titre', 'Titre de la catégorie'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
