
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="formulaire.css" rel="stylesheet" type="text/css">
</head>
<body>
     <form action="job06.php" method="get" class="form-example">
        <div class="form-example">
    <label for="nombre">Enter your number: </label>
    <input type="text" name="nombre">
    <input type="submit" value="Subscribe!">
        </div>
 
</html>


<?php
  $nombre = $_GET ['nombre'];
    if ( $_GET ['nombre'] % 2 === 0) {
      echo $nombre .'est un nombre pair';
    }
        else{
      echo $nombre .'est un nombre impair';

    }  
?>
</body>
</html>