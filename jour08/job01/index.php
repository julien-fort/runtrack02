<!DOCTYPE html>
<html>
    <head>
        <title>compteur de page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="">
    </head>
    
    <body>
    <form class="" method="get" action="reset.php">
    <input type="submit" name="destroy" value="reset du compteur">
        </form>
        <h1>Titre principal</h1>
        <?php
        //On démarre une nouvelle session
            session_start();
            if (isset($_SESSION['nbvisites'])){
                $_SESSION ['nbvisites'] ++;
            }
            else{
                $_SESSION ['nbvisites'] = 0;
            }
                echo $_SESSION ['nbvisites'];
        ?>
        
                  
    </body>
</html>