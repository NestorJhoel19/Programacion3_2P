<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //una variable no debe empezar con un numero
        //inician con el simbolo $
        //en PHP no se define el tipo de datos
        $codigo = 123;
        $nombre = "Carlos";
        $apellido = "Guisbert";
        $edad = 50;
        $peso = 85;
        $altura = 1.80;

        print "<h3>Datos personales</h3>";
        print "<br>Codigo: " . $codigo;
        print "<br>Nombre completo: " . $nombre . " " . $apellido;
        print "<br>Edad: " . $edad . " anios";
        print "<br>Peso: " . $peso . " kg";
        print "<br>Altura: " . $altura . " mt";
        print "<br>";
        echo $nombre,$edad; //echo admite esto, print no 
        // print es una funcion, echo es una expresion
    ?>
</body>
</html>