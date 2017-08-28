<?php
    //Récupérer tous les articles de tables articles
    $posts = App::getInstance()->getTable('Post')->all();
?>



<h1>Administrer les articles</h1>


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
            </td>


        <?php endforeach; ?>
    </tbody>
</table>
