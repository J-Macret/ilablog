<?php
session_start();
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


<?php $article = getArticle($db,1, $_GET['id']); 
    if(!isset($_GET['id'])) {
        header('location: ../index.php');
    }
    if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
        header('location: ../index.php');
    }
    
    if (isset($_POST) AND !empty($_POST)) {
        if (!empty($_POST['name']) AND !empty($_POST['nom_personnage']) AND !empty($_POST['author']) AND !empty($_POST['content'])) {
            $req = $db->prepare('UPDATE article SET name = :name, content = :content, author = :author, nom_personnage = :nom_personnage WHERE id = :id');
            $req->execute([
                'name' => $_POST['name'],
                'content' => $_POST['content'],
                'author' => $_POST['author'],
                'nom_personnage' => $_POST['nom_personnage'],
                'id' => $_GET['id']
            ]);
            $_SESSION['flash']['success'] = 'Article modifié !';
        }else{
            $_SESSION['flash']['error'] = 'Champs manquants !';
           
        }
    }
    
    ?>

<div class="container">
        <div class="table">
            <div class="cell">
                <div class="content">
                <p class="p-admin">Modifier l'article "<?= $article->name ?>"<br>
                    <em>Laissez vide si aucun changement</em></p><br>
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
                    <input type="text" name="name" class="admin" value="<?= $article->name ?>">
                    <h1 class="admin-h1">Le personnage :</h1>
                    <input type="text" name="nom_personnage" class="admin" value="<?= $article->nom_personnage ?>">
                    <h1 class="admin-h1">Le contenu :</h1>
                       <div class="petit">
                           <textarea cols="80" class="ckeditor" id="editeur" name="content" rows="10"><?= $article->content ?></textarea>
                       </div>
                    <h1 class="admin-h1">L'auteur :</h1>
                    <input type="text" name="author" class="admin" value="<?= $article->author ?>"> <!-- FAIRE UN SELECT -->
                    <br><button type="submit" class="bouton admin-bouton">Modifier</button>
                </form>
            </div>
        </div>
</div>
</div>

</body>
<script src="../js/jQuery.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/menu.js"></script>


</html>


<?php unset($_SESSION['flash']['success']);
unset($_SESSION['flash']['error']); ?>