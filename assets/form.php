<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $db = new PDO('mysql:host=localhost;dbname=cv_interactif', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$sql = "INSERT INTO contact (nom, mail, objet, comment) VALUES (?, ?, ?, ?)";

    $stmt = $db->prepare($sql);

    $stmt->execute(array($_GET['nom'],$_GET['mail'],$_GET['objet'],$_GET['comment']));

    $db = null;

    header('Location: ../contact/contact.html');
  } else {
    http_response_code(500);
  }
  ?>