<?php
$arrNumbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function getNumbers (array $arr ): array
{
    $result['max'] = max($arr);
    $result['avg'] = round(array_sum($arr) / count($arr));
    $result['min'] = min($arr);

    return $result;
}

$result = getNumbers($arrNumbers);

print_r($result);



