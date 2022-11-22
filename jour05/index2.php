
<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="style01.css" rel="stylesheet" type="text/css">
    <link href="style02.css" rel="stylesheet" type="text/css">
    <link href="style03.css" rel="stylesheet" type="text/css">
  </head>
    <body>
        <form method="get" action="index.php">
            <select name="list">
                <option value="style01" name="style01"> style01</option>
                <option value="style02" name="style02"> style02</option>
                <option value="style03" name="style03"> style03</option><br>
                <input type="submit" value="Subscribe!">
                <p>Votre nom : <input type="text" name="nom" /></p>
                <p>Votre prenom : <input type="text" name="prenom" /></p>
            </select>
        </form>
    </body>
</html>

