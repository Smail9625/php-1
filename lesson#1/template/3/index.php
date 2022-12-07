<?php

$title = "Главная страница - страница обо мне";
$headerTitle = "Информация обо мне";
$text = "Краткая биография обо мне
Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
На данный момент работаю ведущим инженером в крупной авиакомпании.
Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными
фотографиями на эту тему";
$year = "2018";

$content = file_get_contents("site.html");

$content =str_replace("{{ title }}", $title, $content);
$content =str_replace("{{ headerTitle }}", $headerTitle, $content);
$content =str_replace("{{ text }}", $text, $content);
$content =str_replace("{{ year }}", $year, $content);

echo $content;