<?php
$arrNumbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$getPartyNumbers = function (int $number)
{
    if($number % 2 === 0){
       return $result[] = 'Чётное';
    }else {
       return $result = 'Не чётное';
    }
};

$result = array_map($getPartyNumbers, $arrNumbers);

print_r($result);