<?php
    //Récupérer tous les articles de tables articles
    $posts = App::getInstance()->getTable('Post')->all();
?>



<h1>Administrer les articles</h1>


<p>
  <a class="btn btn-success" href="?p=posts.add" >Ajouter un article</a>
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
        <!-- Lister tous les articles et les afficher -->
        <?php foreach ($posts as $post): ?>

            <td><?= $post->id; ?></td>
            <td><?= $post->titre; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=posts.edit&id=<?= $post->id; ?>" >Editer</a>
                
                <!-- Mettre le bouton supprimer dans un formulaire pour éviter les problèmes de sécurité -->
                <form action="?p=posts.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $post->id; ?>">
                    <button type="submit" class="btn btn-danger" href="?p=posts.delete&id=<?= $post->id; ?>" >Supprimer</button>
                </form>
            </td>


        <?php endforeach; ?>
    </tbody>
</table>
