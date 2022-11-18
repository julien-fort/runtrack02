
<?php

echo '<table "border= 1>
<thead>
<tr>
<th>argument</th>
<th>valeur</th>
</tr>
</thead>';

foreach ($_GET as $var => $value){
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
 <form method="get" class="form-example">
        <div class="form-example">
    <label for="name">Enter your name: </label>
    <input type="text" name="nom" id="nom"><br>
    <label for="lastname">Enter your lastname: </label>
    <input type="text" name="lastname" id="lastname">
    <input type="submit" value="Subscribe!">
        </div>
 </form>
</body>
</html>
