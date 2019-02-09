<?php session_start(); ?>
<?php require_once('php/header.php'); ?>



<div class="container">
    <div class="table">
        <div class="cell">  
            <div class="content">
               
                <?php if(array_key_exists('errors', $_SESSION)): ?>
                   <div class="alert alert-danger">
                       <?= implode('<br>', $_SESSION['errors']); ?>
                   </div>
               <?php unset($_SESSION['errors']); endif; ?>
               
               
                <form action="post_contact.php" method="post">
                    <div class="form-groupe">
                        <h1><label for="inputname">Votre nom :</label></h1><br>
                        <input type="text" name="name" class="form-control" id="inputname">
                    </div>
                    <div class="form-groupe">
                        <h1><label for="inputemail">E-mail :</label></h1><br>
                        <input type="text" name="email" class="form-control" id="inputemail">
                    </div>
                    <div class="form-groupe">
                        <h1><label for="inputmessage">Message :</label></h1><br>
                        <textarea name="message" class="form-control" id="inputmessage" rows="10" cols="100"></textarea>
                    </div>
                    <button type="submit" class="bouton">Envoyer</button>
                </form>
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