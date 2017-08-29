<?php

    //On se connecte à la table des articles
	$postTable = App::getInstance()->getTable('Post');

    

    //Si on demande à supprimer un article
    if(!empty($_POST)){
        $result = $postTable->delete($_POST['id']);
        header('location: admin.php');
    }

?>
