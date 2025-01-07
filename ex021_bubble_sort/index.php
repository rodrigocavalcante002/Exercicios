<?php 
// Um bubble sort se trata de uma função que fará com que uma certa sequência de números armazenados em um array esteja de forma organizada. EX: array[5,3,6,7,0,2,1] => retorno array[0,1,2,3,5,6,7]
$array = [3,4,3,5,1];

function bubbleShort(&$array){
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // Troca os elementos
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
        // echo $j;
    } 
}
// echo count($array);
bubbleShort($array);

print_r($array);
?>