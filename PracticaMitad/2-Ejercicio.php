
<?php

if (isset($_POST['dimension-matriz'])) {
    $dimension = $_POST['dimension-matriz'];
}

//$dimension = 6;
$cantidadDeCeldas = $dimension * $dimension;

$cantidadUnos = round(($cantidadDeCeldas*20)/100);
$conUnos = 0;

for ($i=0; $i < $dimension; $i++) { 
    for ($j=0; $j < $dimension; $j++) { 
        if ($conUnos < $cantidadUnos) {
            $numeroAleatorio = rand(0, 1);
            $matriz[$i][$j] = $numeroAleatorio;
            if($numeroAleatorio == 1) {
                $conUnos++;
            }
        }elseif($conUnos == $cantidadUnos){
            $matriz[$i][$j] = 0;
        }
    }
}

echo "<h3>Matriz generada</h3>";
for ($i=0; $i < $dimension; $i++) { 
    for ($j=0; $j < $dimension; $j++) { 
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

?>