
<?php


$array_numbers = array(1, 2, 3, 4, 5);

$array_text = array("3" => "one", "two", "three", "four", "five");


$datos = [
    "biromes" => array(
        "Bic",
        "Fabber Castell"
    ),
    "resmas" => [
        "Rivadavia",
        "Éxito"
    ]
];

var_dump($array_numbers);
echo "<br>";
var_dump($array_text);
echo "<br>";
var_dump($datos);
echo "<br>";
var_dump($datos["resmas"][1]);
echo "<br>";

foreach ($datos as $key => $value) {
    echo "<br>";
    echo "Key: " . $key . "<br>";
    foreach ($value as $key2 => $value2) {
        echo "Value: " . $value2 . "<br>";
    }
}
