<?php

echo $_GET["index.php"];

if ($_GET["index.php"] == "style01"){
    echo '<link href="style01.css" rel="stylesheet" type="text/css">';
}
elseif ($_GET['list']== "style02")
    {echo '<link href="style02.css" rel="stylesheet" type="text/css">';
}
elseif ($_GET['list'] == "style03")
    {echo '<link href="style03.css" rel="stylesheet" type="text/css">';
}
?>