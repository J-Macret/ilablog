<?php 


$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '') {
    $errors['email'] = "Vous n'avez pas renseigné votre email";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

if(!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
    header('Location: contact.php');
}else{
    $message = $_POST['message'];
    $headers = "FROM: Blog FFXIV";

// mail('contact@local.dev', 'Formulaire de contact', $message, $headers);
}



var_dump($_POST);