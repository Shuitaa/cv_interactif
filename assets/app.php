<?php
include('secret.php');  // Appelle de la base de données
$id_article = htmlspecialchars($_GET['id']);

if (isset($_GET['id']) AND !empty($_GET['id'])) { //On vérifie si la variable $_GET['id'] existe et si elle n'est pas vide
    $getid = (int)  $_GET['id']; //récupération de l'id de l'article liké
    $getip = $_SERVER['REMOTE_ADDR']; //récupération de l'adresse IP de l'utilisateur

    //variable qui a pour but de vérifier si l'article a déjà été liké par cette adresse ip ou non
    $check_like = $db -> prepare('SELECT id FROM likes WHERE id_article = ? AND ip_utilisateur = ?');
    $check_like -> execute(array($getid,$getip));



    if($check_like->rowCount() == 1){ //vérification
        $del = $db -> prepare('DELETE FROM likes WHERE id_article = ? AND ip_utilisateur = ?'); //suppression du like
        $del -> execute(array($getid,$getip));

    } else {
        $ins = $db->prepare('INSERT INTO likes (id_article, ip_utilisateur) VALUES (?, ?)'); //ajout du like
        $ins -> execute(array($getid,$getip));
    }
    $likes = $db -> prepare('SELECT id FROM likes WHERE id_article = ?'); //comptabilisation des likes
    $likes->execute(array($getid));
    $likes = $likes -> rowCount();

    $likes_heart = $db -> prepare('SELECT id FROM likes WHERE id_article = ? AND ip_utilisateur = ?');
    $likes_heart->execute(array($getid,$getip));
    $likes_heart = $likes_heart -> rowCount();

    
    echo $likes.','.$likes_heart;
}
?>