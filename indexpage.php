<?php
require('model.php'); // charge le fichier model.php en chargant le fichier 

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);
    require('postView.php');
}
else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}

$posts = getPosts(); // recuperation 

require('indexView.php'); // charger les fichier  indexView.php
