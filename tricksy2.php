<?php 

$total = 0;
$totalNums = 0;
$index = 0;

while ($totalNums < 117) {
    $index += 1;

    if ($index % 3 === 0 || $index % 7 === 0) {
        $total += $index;
        $totalNums += 1;
    }
}

var_dump($total);