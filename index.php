<?php
//Ejercicios 1, 2, 3
echo 
"<html>
<head>
<title>PHP</title>
</head>
<body>
<h1>Mi Primera página PHP</h1> 
<div>Páginas de pruebas de PHP</div>
</body>
</html>
<br>";

//Ejercicio 4
$n1 = 10;
$n2 = 20;
$n3 = $n1 + $n2;

//Ejercicio 5
$p1 = 3;
$p2 = $p1 * 3; 
$p3 = ($p1 + $p2) / 4;

echo
"$n1 + $n2 = $n3 
<br>
<br>
La variable p2 = $p2
<br>
<br>
La variable p3 = $p3
<br>
<br>";

//Ejercicio 6
if($p2 > 5) { //funciona si es mayor que cinco, el numero se dividira entre 4
$p3 = ($p1 + $p2) / 4;
}

//Ejercicio 7
elseif($p2 = 5) { //funciona si es 5 exacto, el numero pasra a solo sumarse
$p3 = ($p1 + $p2);
}

//Ejercicio 6
else {  //funciona, si este numero pasa a ser menor que 5, se dividira entre 8
$p3 = ($p1 + $p2) / 8;
}

//Ejercicio 8
switch ($p2) {
case ($p2 > 5): //funciona si es mayor que cinco, el numero se dividira entre 4
$p3 = ($p1 + $p2) / 4;
break;

case  5:  //funciona si es 5 exacto, el numero pasra a solo sumarse
$p3 = ($p1 + $p2);
break;

case ($p2 < 5): //funciona, si este numero pasa a ser menor que 5, se dividira entre 8
$p3 = ($p1 + $p2) / 8;
break;
}


//Ejercicio 9
for($i = 1; $i < 10; $i++) 
{
$tablai = $i * $p1;
echo $p1. " * ".$i. " = " .$tablai. "<br>";
}

echo
"<br>";

//Ejercicio 10
$j = 1;
while($j < 10) {
$tablaj = $j * $p2;
echo $p2. " * ".$j. " = " .$tablaj. "<br>";
$j++;
}

echo
"<br>";

//Ejercicio 11
$array = array("Dark Souls", "Dark Souls II", "Dark Souls III", "Bloodborne", "Sekiro", "Elden Ring");
foreach($array as $juegos) {
echo "Tengo todos los logros de $juegos <br> <br>";
}
?>
