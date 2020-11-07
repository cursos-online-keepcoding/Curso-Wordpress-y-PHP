<?php

echo "Inicio del script\n";

if (2 > 20000){
    echo "Entro en el condicional \n";
} else {
    echo "NO entro en el condicional \n";
}

echo "Fin del script\n";

if((10 > 2) && ('LOL' != 'Counter Strike')){
    echo "Entro seguro en el if, la condición es verdara \n";
}

if((200 > 2000) || ('LOL' != 'LOL')){
    echo "Entro con que una de las dos condiciones es verdadera, no necesariamente las dos.\n";
}