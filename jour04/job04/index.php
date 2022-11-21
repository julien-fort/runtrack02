<?php
echo '<table border= 5>
<thead>
<tr>
<th>argument</th>
<th>valeur</th>
</tr>
</thead>';

foreach ($_POST as $var => $value){
    echo '<tr><td>'.$var.'</td><td>'.$value.'</tr></td>';
}
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="formulaire.css" rel="stylesheet" type="text/css">
</head>
<body>
 <form method="post" >
    <label for="name">Enter your name: </label>
    <input type="text" name="nom" id="nom"><br>
    <label for="lastname">Enter your lastname: </label>
    <input type="text" name="prenom" id="prenom">
    <input type="submit" value="Subscribe!">
 </form>
</body>
</html>