<?php
session_start();
require_once('php/header.php');
require_once('php/db.php');
require_once('php/function.php');


$article = getArticle($db,1, $_GET['id']); ?>

<div class="container">
        <div class="table">
            <div class="cell">
                <div class="content">
                <h1><?= $article->name ?></h1>
                <h2><?= $article->nom_personnage ?></h2>
                <p><?= $article->content ?></p>
                <h3>Par <?= $article->author ?></h3>
                </div>
                
                
                <?php if(isset($_SESSION['admin']) AND !empty($_SESSION['admin'])): ?>
                <div class="gestion-article">
                    <a href="admin/delete_article.php?id=<?= $article->id ?>"><h2>Supprimer cet article</h2></a>
                    <a href="admin/edit_article.php?id=<?= $article->id ?>"><h2>Modifier cet article</h2></a>
                    <a href="admin/admin1107_1402.php"><h2>Espace Admin</h2></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
</div>


</body>
<script src="js/jQuery.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/menu.js"></script>

</html>
