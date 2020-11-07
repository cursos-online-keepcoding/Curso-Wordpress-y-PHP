<?php

$num = 10;

switch ($num) {
    case 0:
        echo "num es igual a 0";
        break;
    case 1:
        echo "num es igual a 1";
        break;
    case 2:
        echo "num es igual a 2";
        break;
    case 3:
        echo "num es igual a 3";
        break;
    default:
        echo "Ningun case se cumple o es igual a su valor";
}

if ($num == 0){
    echo "num es igual a 0";
} elseif ($num == 1){
    echo "num es igual a 1";
} elseif ($num == 2 ){
    echo "num es igual a 2";
} elseif ($num == 3 ){
    echo "num es igual a 3";
} else {
    echo "Ningun case se cumple o es igual a su valor";
}
