<?php


$message = "Hola Mundo \n algo después";

echo $message;

echo "<br>";

$random = rand(1, 10);

if ($random > 5) {
    echo "Texto por que salió: {$random}";
} else {
    echo "Es {$random}";
}

echo "<br>";

echo $random > 5 ? "Texto en ternario por que salió: {$random}" : "En ternario es {$random}";

echo "<br>";




switch ($random) {
    case 1:
        echo "en switch: Es 1";
        break;
    case 2:
        echo "en switch: Es 2";
        break;
    case 3:
        echo "en switch: Es 3";
        break;
    case 4:
        echo "en switch: Es 4";
        break;

    default:
        echo "en switch: Es mayor que 4";
        break;
}


echo "<br>";

for ($i = 0; $i < $random; $i++) {
    echo "<br>";
    echo "Iteración: {$i}";
}

echo "<br>";

foreach (range(1, $random) as $num) {
    echo "<br>";
    echo "Iteración foreach: {$num}";
}
