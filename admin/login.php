<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" type=text/css rel="stylesheet">
    <title>Identification administrateur</title>

</head>

<body>

    <?php require_once '../php/db.php'; ?>
    <div class="container">
        <div class="table">
            <div class="cell">
                <div class="content">
                    <h1>Identifiez vous, administrateur :</h1>
                    <br>

                    <?php
                        
                        if (isset($_POST) AND !empty($_POST)) {
                            if (!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))) {
                                $req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
                                $req->execute([
                                    'username' => $_POST['username'],
                                    'password' => $_POST['password']
                                ]);
                                $user = $req->fetch();
                                
                                if ($user) {
                                    session_start();
                                    $_SESSION['admin'] = $_POST['username'];
                                    header('location: admin1107_1402.php');
                                } else {
                                   $error = "Identifiants incorrect";
                                }
                            } else { 
                                   $error = 'Veuillez remplir tous les champs !'; 
                            }
                        }
                        
                        if (isset($error)) {
                            echo "<div class='alert alert-danger'>". $error ."</div><div class='hr'></div>";
                        }
                        
                    ?>

                        <form action="login.php" method="post">
                            <h1 class="admin-h1"><label for="inputadmin">Identifiant :</label></h1>
                            <input type="text" name="username" id="inputadmin" class="admin">
                            <h1 class="admin-h1"><label for="inputmdp">Mot de passe :</label></h1>
                            <input type="password" name="password" id="inputmdp" class="admin">
                            <div class="form-groupe form-bouton">
                                <button type="submit" class="bouton admin-bouton">Sésame... ouvre toi !</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
