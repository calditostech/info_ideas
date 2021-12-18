<?php
// Your code here!

$ano = date('y');
$seculo = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];

function Seculo($ano, $seculo){
    if($ano <= 1700 && $seculo == 17){
        echo "O ano é ".$ano." seculo ".$seculo;
    }
    
    if($ano <= 1800  && $seculo == 18){
        echo "O ano é ".$ano." seculo ".$seculo;
    }
    
    if($ano <= 1900 && $seculo == 19){
        echo "O ano é ".$ano." seculo ".$seculo;
    }
    
    if($ano <= 2000 && $seculo == 20){
        echo "O ano é ".$ano." seculo ".$seculo;
    }
    
    if($ano == 2021 && $seculo == 21){
        echo "O ano é ".$ano." seculo ".$seculo;
    }
}

Seculo(1700,17);
?>
