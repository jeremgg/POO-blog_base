<?php

    //On se connecte à la table des catégories
	$category = App::getInstance()->getTable('Category');

    

    //Si on demande à supprimer une catégorie
    if(!empty($_POST)){
        $result = $category->delete($_POST['id']);
        header('location: admin.php?p=categories.index');
    }

?>
