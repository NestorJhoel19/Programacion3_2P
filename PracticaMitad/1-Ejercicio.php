<?php

if (isset($_POST['dimension'])) {
    $limite = $_POST['dimension']; 
}

echo "Arreglos Bidimensionales<br><br>";

for ($i=0; $i < $limite; $i++) { 
    for ($j=0; $j < $limite; $j++) { 
        /*
        if ($i == $j) {
            $matriz[$i][$j] = 2;
        }elseif ($i+$j == ($limite-1)) { // matriz[0].lenght
            $matriz[$i][$j] = 2;
        }elseif($i == round($limite/2)-1){
            $matriz[$i][$j] = 2;
        }elseif($j == round($limite/2)-1){
            $matriz[$i][$j] = 2;
        }else{
            $matriz[$i][$j] = 0;
        }*/
        if (($i == $j) || $i+$j == ($limite-1) || $i == round($limite/2)-1 || ($j == round($limite/2)-1)) {
            $matriz[$i][$j] = 2;
        }else{
            $matriz[$i][$j] = 0;
        }
    }
}

/**
 * if($i == round($limite/2))
 */

for ($i=0; $i < $limite; $i++) { 
    for ($j=0; $j < $limite; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}


?>