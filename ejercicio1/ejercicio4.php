<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**Suma +, Resta -,
       Multiplicacion *, Division /
       Potencia, Raiz*/
        $cant1 = 5;
        $cant2 = 2;

        $suma = $cant1 + $cant2;
        $resta = $cant1 - $cant2;
        $multi = $cant1 * $cant2;
        $div = $cant1 / $cant2;

        //Funcion para calcular potencia
        $potencia = pow($cant1, $cant2);

        //Funcion para calcular  la raiz
        $numero = 25;
        $raiz = sqrt($numero);

        print "Cantidad uno: " . $cant1;
        print "<br>Cantidad dos: " . $cant2;

        print "<br>La suma es: " . $suma;
        print "<br>La resta es: " . $resta;
        print "<br>La multiplicacion es: " . $multi;
        print "<br>La division es: " . $div;
        print "<br>$cant1 elevado a $cant2 = " . $potencia;
        print "<br>La raiz cuadrada de $numero es: " . $raiz;

        $suma2=20;
        $suma2+=100;
        print "<br>La suma es: " . $suma2;

    ?>
</body>
</html>