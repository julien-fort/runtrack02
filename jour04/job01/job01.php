<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="formulaire.css" rel="stylesheet" type="text/css">

<?php
$a = 0;
 foreach ($_GET as $var){
$a = $a+1;
}
echo 'Le nombre d’argument GET envoyé est:' .$a;
?>