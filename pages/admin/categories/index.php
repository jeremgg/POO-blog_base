<?php
    //Récupérer tous les articles de la table des categories
    $categories = App::getInstance()->getTable('Category')->all();
?>



<h1>Administrer les catégories</h1>

<p>
  <a class="btn btn-success" href="?p=categories.add" >Ajouter une catégorie</a>
</p>

<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Titre</td>
            <td>Actions</td>
        </tr>
    </thead>

    <tbody>
        <!-- Lister toutes les catégories et les afficher -->
        <?php foreach ($categories as $category): ?>

            <td><?= $category->id; ?></td>
            <td><?= $category->titre; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=categories.edit&id=<?= $category->id; ?>" >Editer</a>
                
                <!-- Mettre le bouton supprimer dans un formulaire pour éviter les problèmes de sécurité -->
                <form action="?p=categories.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $category->id; ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>


        <?php endforeach; ?>
    </tbody>
</table>
