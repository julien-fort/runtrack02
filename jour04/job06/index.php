
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="formulaire.css" rel="stylesheet" type="text/css">
</head>
<body>
     <form method="get">
    <label for="nombre">nombre: </label>
    <input type="text" name="nombre">
    <input type="submit" value="Subscribe!">
     </form>

</body> 
</html>


<?php

  if(isset($_GET['nombre'])){

    if ( $_GET ['nombre'] % 2 == 0) {
      echo 'est un nombre pair';
    }
        else{
      echo 'est un nombre impair';

    }
  }
?>

