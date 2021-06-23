<?php
echo "<pre>";

$primeirovalor = $_POST["Numero1"];
$segundovalor = $_POST["Numero2"];

function gerador($number1, $number2){
    $aleatorios = array();
    for($a = $number1; $a <= $number2; $a++){
        $aleatorios[] = rand();
    }
    
    foreach($aleatorios as $key => $value){
        analise($value);
    }
}
// $key => $value

function analise($imparpar){
    if($imparpar % 2 == 0) {
        echo "$imparpar É par<br>";
    }
    else {
        echo "$imparpar É impar<br>";
    }
}

gerador($primeirovalor, $segundovalor);
?>