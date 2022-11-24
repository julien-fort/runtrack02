<!DOCTYPE html>
<html>
    <head>
        <title>compteur de page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="">
    </head>
    
<body>
    <?php
    //On démarre une nouvelle session
    session_start();
    if (isset ($_GET["destroy"])){
    session_destroy();
    header('Location: .');
    }
    
    ?>
    <form class="" method="get">
    <label for="name">Enter your name: </label>
    <input type="text" name="nom" id="nom">
    <input type="submit" name="valider" value="valide">
    <input type="submit" name="destroy" value="reset">
    </form>

    <?php
    if (isset ($_GET['nom'])){
     $_SESSION['nom'] = $_SESSION['nom'].'<br><li>' . $_GET['nom'].'<li>';
    }
        echo $_SESSION['nom'];
    

     ?>