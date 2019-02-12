<?php
session_start();
require_once('../php/db.php');
if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
    if (isset($_GET['id'])) {
            $req = $db->query('SELECT * FROM article WHERE id = '.$_GET['id']);
            $article = $req->fetch();
            if ($article) {
               $req = $db->query('DELETE FROM article WHERE id = '.$_GET['id']);
            } else {
                header('location:../index.php');
            }
        }
} else {
header('location:../index.php');
}
