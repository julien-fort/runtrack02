<?php
     $str = "I'm sorry Dave I'm afraid I can't do that.";
     $b = ['a' , 'e' , 'i' , 'I' , 'o' , 'u' , 'y'];
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
