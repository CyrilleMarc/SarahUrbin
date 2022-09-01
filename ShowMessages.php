<?php
try {
    $bdd = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_ecb86cfcf145222;charset=utf8', "beceab70a9685f", "134b075f");
    $req = $bdd->prepare('SELECT * FROM sarahurbin');
    $req->execute();
    $messages = $req->fetchAll();
    $req->closeCursor();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>
