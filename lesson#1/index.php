<?php

$name = readline("Как вас зовут ?");
$age = readline("Сколько вам лет ?");
$task1 = readline("Какая задача стоит перед вами сегодня ?");
$task2 = readline("Какая задача стоит перед вами сегодня ?");
$task3 = readline("Какая задача стоит перед вами сегодня ?");
$time1 = (int)readline("Сколько примерно времени эта задача займет?");
$time2 = (int)readline("Сколько примерно времени эта задача займет?");
$time3 = (int)readline("Сколько примерно времени эта задача займет?");
$result = $time1 + $time2 + $time3;


echo "Вас зовут $name, вам $age лет \n";

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день: 
-$task1 ($time1" . "ч)
-$task2 ($time2" . "ч)
-$task3 ($time3" . "ч)
Примерное время выполнения плана = $result" . "ч";
