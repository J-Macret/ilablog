<?php

function getArticle($db, $nb = null, $id = null){
    if ($nb AND !$id) {
        $req = $db->query('SELECT * FROM article LIMIT'.$nb);
        $articles = $req->fetchAll();
    } elseif($id) {
        $req = $db->query('SELECT * FROM article WHERE id = '.$id);
        $articles = $req->fetchObject();
    }else {
        $req = $db->query('SELECT * FROM article');
        $articles = $req->fetchAll();
    }
    return $articles;
}


//Création de la fonction cutString à 4 paramètres
// $string = la chaîne tronqué
// $start = le caractère de départ
// $length = la longueur de la chaîne (en caractère)
// $endStr = paramètre optionnel afin de terminer l'extrait par un "[...]" 
function cutString($string, $start, $length, $endStr = '[&hellip]'){
    //si la taille de la chaine est inférieur ou égale à celle attendue, on la retourne tel quel
    if(strlen($string)<=$length) {
        return $string;
    } //autrement on continue
    else {
        $str = mb_substr($string, $start, $length - strlen($endStr) + 1, 'UTF-8');
        return substr($str, 0, strrpos($str, ' ')).$endStr;
    }
    
    $req = $db->query('SELECT content FROM article WHERE id ='.$article['id']);
    $article = $req->fetch;
    
    $content = strip_tags($article);
    $short = cutString($content, 0, 200);
    
    echo $short;
}