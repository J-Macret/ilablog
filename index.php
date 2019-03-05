<?php require_once('php/header.php'); ?>
<?php require_once('php/db.php'); ?>
<!-- Content part -->
<div class="container">
    <div class="table">
        <div class="cell">
            <div class="content">
                <h1><img src="img/bordurecool3.png" width="20%">Welcome<img src="img/bordurecool3.png" width="20%"></h1>
                <h2>"Le long des airs, je sème ce doux poème"</h2>
                <div class="hr"></div>
                <p>Bienvenue sur mon blog dédié au Roleplay !<br> Les personnages auxquels sont liés les textes viennent de l'univers de Final Fantasy XIV, serveur Ragnarok !<br>Bonne lecture ! :D</p><br>

                <h1>Mes deux derniers articles :</h1>
                <div><img src="img/bordurecool4.png"></div><br>
                <div class="last-article">


                    <div class="card-deck">
                        <?php
                            $req = $db->query('SELECT * FROM article ORDER BY id DESC LIMIT 2 ');
                            $articles = $req->fetchAll();
                            
                            
                            foreach ($articles as $article): ?>

                            <div class="card">
                                <h1>
                                    <?= $article['name']; ?>
                                </h1>
                                <h4>
                                    <?= $article['nom_personnage']; ?>
                                </h4>
                                <div class="hr"></div>
                                <img src="img/logo.png">
                                <div class="hr"></div>
                                <p>
                                    <?php echo mb_strimwidth($article['content'], 0, 150, "..."); ?>
                                </p><br>
                                <p>Par :
                                    <?= $article['author']; ?>
                                </p><br>
                                <a href="single_article.php?id=<?= $article['id'];?>">Voir l'article en entier</a>
                            </div>
                            <?php endforeach; ?>
                    </div>
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
