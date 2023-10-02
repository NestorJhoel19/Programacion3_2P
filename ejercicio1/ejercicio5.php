<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = "10";
        $num2 = 10;
        if ($num1 == $num2) {
            print "<h2>Las variables tienen el mismo valor</h2>";
        }else{
            print "<h2>Las variables no tienen el mismo valor</h2>";
        }
        /*
        Aqui saldra falso
        */
        if ($num1 === $num2) {
            print "<h2>Las variables tienen el mismo valor</h2>";
        }else{
            print "<h2>Las variables no tienen el mismo valor</h2>";
        }
        if ($num1 <> $num2) {
            print "<h2>Las variables tienen diferentes valores</h2>";
        }else{
            print "<h2>Las variables no tienen diferentes valores</h2>";
        }

        $edad = 18;
        if ($edad >= 18) {
            print "<h2>Eres mayor de edad</h2>";
        }else{
            print "<h2>Eres menor de edad</h2>";
        }

        $num1 = 10;
        $num2 = 0;

        if ($num2 == 0) {
            print("No se puede dividir entre 0");
        }else{
            $total = $num1 / $num2;
            print("El resultado es $total");
        }

        $nota = 78;
        if ($nota >= 0 && $nota <=25) {
            print("<br>Malo");
        }elseif ($nota > 25 && $nota <= 40) {
            print("<br>Regular");
        }elseif ($nota > 40 && $nota <= 65) {
            print("<br>Bueno");
        }elseif ($nota > 65 && $nota <= 85) {
            print("<br>Muy Bueno");
        }elseif ($nota > 85 && $nota <= 100) {
            print("<br>Excelente");
        }else {
            print("<br>Fuera de rango");
        }

    ?>
</body>
</html>