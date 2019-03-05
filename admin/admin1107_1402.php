<?php session_start(); 
require_once('../php/db.php');
require_once('../php/function.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" type=text/css rel="stylesheet">
    <style type="text/css">
        * {
            z-index: auto;
        }

        .petit {
            margin: 0 auto;
            width: 45%;
            padding: 10px;
        }

        .admin-bouton {
            width: 15%;
        }

        input.admin {
            width: 45%;
            text-align: center;
        }

        .admin-h1 {
            width: 45%;
        }

        .p-admin {
            font-size: 26px;
        }

        .p-admin>em {
            font-size: 15px;
        }

    </style>
    <title>Edit article</title>

</head>

<body>
    
    

    <?php  
        require_once('../php/db.php');
        if (!isset($_SESSION['admin']))
        {
        header('location: login.php');
        } 
    ?>
    
    <?php 
    
    if (isset($_POST) AND !empty($_POST)) {
        if (!empty($_POST['name']) AND !empty($_POST['nom_personnage']) AND !empty($_POST['author']) AND !empty($_POST['content'])) {
            $req = $db->prepare('INSERT INTO article SET name = :name, content = :content, author = :author, nom_personnage = :nom_personnage WHERE id = :id');
            $req->execute([
                'name' => $_POST['name'],
                'content' => $_POST['content'],
                'author' => $_POST['author'],
                'nom_personnage' => $_POST['nom_personnage']
            ]);
            $_SESSION['flash']['success'] = 'Article créer !';
        }else{
            $_SESSION['flash']['error'] = 'Champs manquants !';
           
        }
    }
    
    ?>
    
    
    
    <div class="container">
        <div class="gestion-article"><a href="../index.php" class="retour">Retour au site</a></div>
        <div class="table">
            <div class="cell">
                <div class="content">
                    <h1>Bienvenue
                        <?= $_SESSION['admin']; ?>
                    </h1><br>
                    <p class="p-admin">Créer un article<br>
                            </p><br>
                        <?php
                        if (isset($_SESSION['flash']['success'])) {
                            echo "<div class='alert alert-success'>".$_SESSION['flash']['success']."</div>";
                        } elseif (isset($_SESSION['flash']['error'])) {
                            echo "<div class='alert alert-danger'>".$_SESSION['flash']['error']."</div>";
                        }
                    ?>
                        <script src="../ckeditor/ckeditor.js"></script>
                        <form method="POST">
                            <h1 class="admin-h1">Le titre :</h1>
                            <input type="text" name="name" class="admin" value="">
                            <h1 class="admin-h1">Le personnage :</h1>
                            <input type="text" name="nom_personnage" class="admin" value="">
                            <h1 class="admin-h1">Le contenu :</h1>
                            <div class="petit">
                                <textarea cols="80" class="ckeditor" id="editeur" name="content" rows="10"></textarea>
                            </div>
                            <h1 class="admin-h1">L'auteur :</h1>
                            <input type="text" name="author" class="admin" value="">
                            <!-- FAIRE UN SELECT -->
                            <br><button type="submit" class="bouton admin-bouton">Créer</button>
                        </form>
                </div>
            </div>
            <img src="../img/coin4.png" class="coin_basgauche">
            <img src="../img/coin2.png" class="coin_hautdroit">
            <img src="../img/coin3.png" class="coin_basdroit">
        </div>
    </div>

</body>
<script src="../js/jQuery.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/menu.js"></script>
<style type="text/css">
    .retour {
        position: absolute;
        margin-bottom: 0;
        left: 15px;
        top: 15px;
    }    
</style>

</html>


<?php unset($_SESSION['flash']['success']);
unset($_SESSION['flash']['error']); ?>
