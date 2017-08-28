<?php

    // Vérifier que les données ont été postées
    if(!empty($_POST)){
        //initialiser l'authentification 
        $auth = new \Core\Auth\DBAuth(App::getInstance()->getDb());

        //si l'utilisateur se connecte
        if($auth->login($_POST['username'], $_POST['password'])){
            header('location: admin.php');
        }
        else{
            ?>
            <div class="alert alert-danger">
                Identifiants incorrects
            </div>
        <?php 
        }
    }



    // Initialiser le formulaire
    $form = new \Core\Html\BootstrapForm($_POST);

?>



<!-- Formulaire de connexion -->
<form method="post">
    <?= $form->input('username', 'pseudo'); ?>
    <?= $form->input('password', 'mot de passe', ['type' => 'password']); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>
