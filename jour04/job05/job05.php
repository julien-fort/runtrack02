<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="formulaire.css" rel="stylesheet" type="text/css">
</head>
<body>
 <form method="post">
    <label for="login">Enter your login: </label>
    <input type="text" name="login"><br>
    <label for="password">Enter your password: </label>
    <input type="text" name="password"><br>
    <input type="submit" value="Subscribe!">
 </form>
 </body>
</html>
<?php
if (isset($_POST['login'])&& isset($_POST ['password']))
if ($_POST['login'] == "jhon" && $_POST['password'] =="rambo"){
    echo 'C’est pas ma guerre';
}
    else {
    echo 'Votre pire cauchemar';
    }
?>