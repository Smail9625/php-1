<?php
$name = readline("Как вас зовут ?");
$taskText = "Какая задача стоит перед вами сегодня ?";
$timeText ="Сколько примерно времени эта задача займет?";
$sumTime = 0;
$numberOfTasks = readline("Сколько задач у вас запланировано на день ?");
while ($numberOfTasks <= 0) {
    $numberOfTasks = readline("Сколько задач у вас запланировано на день ?");
}
$result = "{$name}, сегодня у вас запланировано {$numberOfTasks} приоритетных задачи на день:\n";


for($i = 1; $i <= $numberOfTasks; $i++){
    $task = readline($taskText);
    $time = (int)readline($timeText);
    $result .= "-$task ({$time}ч)\n";
    $sumTime += $time;
}

echo $result;
echo "Примерное время выполнения плана = {$sumTime}ч";


