<?php
$db = new PDO ('mysql:host=localhost;dbname=cv_interactif', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
$id_article = htmlspecialchars($_GET['id']);

if (isset($_GET['id']) AND !empty($_GET['id'])) {
    $getid = (int)  $_GET['id'];
    $getip = $_SERVER['REMOTE_ADDR'];

    $check_like = $db -> prepare('SELECT id FROM likes WHERE article_id = ? AND ip_utilisateur = ?');
    $check_like -> execute(array($getid,$getip));

    echo $check_like->rowCount();

    if($check_like->rowCount() == 1){
        echo'bjr';
        $del = $db -> prepare('DELETE FROM likes WHERE article_id = ? AND ip_utilisateur = ?');
        $del -> execute(array($getid,$getip));

    } else {
        $ins = $db->prepare('INSERT INTO likes (id_article, ip_utilisateur) VALUES (?, ?)');
        $ins -> execute(array($getid,$getip));
    }
    
}
?>