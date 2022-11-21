<?php
     $str = 'On n’est pas le meilleur quand on le croit mais quand on le sait'.
     $b = ['a' , 'e' , 'i' , 'O' , 'o' , 'u' , 'y'];
     $c = 0;
     while (isset($str[$c]) == true) {
        foreach ($b as $key => $value) {
            if ($str [$c] == $value){
                echo $str [$c];
            }
        }
        $c = $c+1;
        }
       
?>