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
    ?>
    <form class="" method="get">
    <input type="submit" name="destroy" value="reset du compteur">
    </form>
        <h1>Titre principal</h1>
        <?php
            if (!isset($_COOKIE) || isset($_GET['destroy']))
            {
            setcookie('nbvisites' , '0');
            header('Location: .');
            }
            if (isset ($_COOKIE['nbvisites']) && !isset($_GET['destroy']))
            {
                $a = $_COOKIE['nbvisites'];
                $a ++;
                setcookie('nbvisites', $a);
            } 
                echo $_COOKIE['nbvisites'];
        ?>
        
</body>
</html>