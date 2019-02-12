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
    <div class="container">
        <div class="table">
            <div class="cell">
                <div class="content">
                    <h1>Bienvenue <?= $_SESSION['admin']; ?></h1>
                </div>
            </div>
        </div>
    </div>
    

    <script src="../js/jQuery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../js/menu.js"></script>


    </body>

    </html>
