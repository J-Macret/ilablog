<?php require_once('php/header.php'); ?>
<?php require_once('php/db.php'); ?>
    <!-- Content part -->

    <div class="container">
        <div class="table">
            <div class="cell">
                <div class="content">
                    <h1>Welcome</h1>
                    <h2>"Le long des airs, je sème ce doux poème"</h2>
                    <div class="hr"></div>
                    <p>Bienvenue sur mon blog dédié au Roleplay !<br> Les personnages auxquels sont liés les textes viennent de l'univers de Final Fantasy XIV, serveur Ragnarok !<br>Bonne lecture ! :D</p><br>
                    
                    <h1>Les trois derniers articles :</h1>
                    <div class="last-article"><?php
                        $req = $db->query('SELECT * FROM article ORDER BY id DESC LIMIT 3 ');
                        $articles = $req->fetchAll();
                        
                        foreach ($articles as $article): ?>
                            
                            <div class="card">
                                <h1><?= $article['name']; ?></h1>
                                <h4><?= $article['nom_personnage']; ?></h4>
                                <div class="hr"></div>
                                <img src="http://placehold.it/500x300">
                                <p><?php echo mb_strimwidth($article['content'], 0, 250, "..."); ?><br>Par : <?= $article['author']; ?></p>
                                <a href="single_article.php?id=<?= $article['id'];?>">Voir l'article en entier</a>
                            </div>                            
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="js/jQuery.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/menu.js"></script>

</html>


