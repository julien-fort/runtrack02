
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