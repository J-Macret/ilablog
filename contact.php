<?php include('php/_inc.php'); ?>
<?php require_once('php/header.php'); ?>



<div class="container">
    <div class="table">
        <div class="cell">  
            <div class="content">
               <h1>Contactez moi !</h1>
                <?php if(array_key_exists('errors', $_SESSION)): ?>
                   <div class="alert alert-danger">
                       <?= implode('<br>', $_SESSION['errors']); ?>
                   </div>
                   <div class="hr"></div>
               <?php endif; ?>
               <?php if(array_key_exists('success', $_SESSION)): ?>
                   <div class="alert alert-success">
                       Votre mail a bien été envoyé !
                   </div>
                   <div class="hr"></div>
               <?php endif; ?>
               
               
                <form action="post_contact.php" method="post">
                   <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?> <!-- Afin d'empêcher l'affichage d'une erreur indiquant que la machine ne reconnait pas inputs lorsqu'il est vide-->
                    <?= $form->text('name', 'Votre nom :'); ?>
                    <?= $form->email('email', 'Votre E-mail :'); ?>
                    <?= $form->textarea('message', 'Votre message :'); ?>
                    <div class="form-groupe form-bouton">
                        <button type="submit" class="bouton form-bouton">Envoyer</button>
                    </div>
                </form>
                <br>
                <p>Envie de me faire part de votre ressenti sur un article ? Me faire part d'une suggestion ou même me signaler un problème sur le site ? <br>N'hésitez pas ! Ce formulaire est fait pour cela !</p>
            </div>
        </div>
    </div>
</div>



<script src="js/jQuery.js"></script>
<script src="js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/menu.js"></script>


</body>
</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
