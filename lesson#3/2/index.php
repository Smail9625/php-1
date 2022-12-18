<?php

$wishes = ['счастья', 'здоровья', 'процветания', 'спокойствия'];
$epithets = ['безграничного', 'безмерного', 'великого', 'богатого'];
$name = readline('Как вас зовут ?');
$result = [];

for($i = 0; $i < 3; $i++){
    $resultIdxEpithet = array_rand($epithets);
    $resultIdxWish = array_rand($wishes);
    if($i === 0 ) {
        $result[] = "{$epithets[$resultIdxEpithet]}  {$wishes[$resultIdxWish]},";
    } elseif ($i === 2) {
        $result[] = "и {$epithets[$resultIdxEpithet]}  {$wishes[$resultIdxWish]}";
    } else {
        $result[] = "{$epithets[$resultIdxEpithet]}  {$wishes[$resultIdxWish]}";
    }
}

$result = implode(' ', $result);

echo "
Дорогой {$name},
от всего сердца поздравляю тебя с днем рождения, {$result}!
";

/*
echo "
Дорогой {$name},
от всего сердца поздравляю тебя с днем рождения, желаю  {$wishes[array_rand($wishes)]},
{$epithets[array_rand($epithets)]} {$wishes[array_rand($wishes)]}
и безудержного воображения!
";
*/




