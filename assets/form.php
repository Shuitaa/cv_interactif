<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') { //vérification de la methode utilisée par le formulaire
    $db = new PDO ('mysql:host=sqletud.u-pem.fr;dbname=paverty_db', 'paverty', 'DinoLacambra', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); // Appelle de la base de données
    //requête SQL ajoutant le nom,mail,l'objet et le commentaire
    $sql = "INSERT INTO contact (nom, mail, objet, comment) VALUES (?, ?, ?, ?)"; 
    $stmt = $db->prepare($sql);
    $stmt->execute(array($_GET['nom'],$_GET['mail'],$_GET['objet'],$_GET['comment']));
    //réinitialisation de la base de données
    $db = null;

    header('Location: ../contact/contact.php?success=true'); //redirection vers la page contact.php en revoyant succes = true
  } else {
    http_response_code(500);
  }
  ?>