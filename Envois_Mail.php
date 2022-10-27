<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['telephone'];
$objet = $_POST['objet'];
$mail = $_POST['mail'];

$total_contenu =  'Nom : '.$nom . '<br> Prénom : '. $prenom . '<br> Téléphone : '. $tel . '<br> Mail : '. $mail. '<br> Objet : '. $objet ;

echo $total_contenu;

mail("yoel.illouz@gmail.com", $objet, $total_contenu);



?>