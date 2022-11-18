<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="formulaire.css" rel="stylesheet" type="text/css">
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="formulaire.css" rel="stylesheet" type="text/css">
</head>
<body>
 <form action="job01.php" method="get" class="form-example">
        <div class="form-example">
    <label for="name">Enter your name: </label>
    <input type="text" name="nom" id="nom">
    <input type="submit" value="Subscribe!">
        </div>
 </form>
</body>
</html>
<?php
$a = 0;
 foreach ($_GET as $var){
$a = $a+1;
}
echo 'Le nombre d’argument GET envoyé est:' .$a;
?>