<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <title>recapitulatif</title>
    <link href="recapitulatif.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="job04.php" method="post" class="form-example">
        <label for="name">Enter your name: </label>
        <input type="text" name="nom" id="nom"><br>
        <label for="firstname">Enter your firstname: </label>
        <input type="text" name="prenom" id="prenom"><br>
        <button type="submit value=">Subscribe!</button>
    </form>
<?php
echo '<table "border= 1">
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
</body>
</html>