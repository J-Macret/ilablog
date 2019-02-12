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
                
                <article>
                    <h1><?= $article->name ?></h1><div class="hr"></div>
                    <h2 class="personnage"><?= $article->nom_personnage ?></h2><div class="hr"></div>
                    <span class="content"><p class="content-article"><?= $article->content ?></p></span><br>
                    <h3 class="auteur">Par <?= $article->author ?></h3>
                </article>
                </div>
                
                
                <?php if(isset($_SESSION['admin']) AND !empty($_SESSION['admin'])): ?>
                <div class="gestion-article">
                    <a onclick='return confirm("Êtes vous sûr ?");' href="admin/delete_article.php?id=<?= $article->id ?>"><h2>Supprimer cet article</h2></a>
                    <a href="admin/edit_article.php?id=<?= $article->id ?>" ><h2>Modifier cet article</h2></a>
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
