<?php

do{
    $question = (int)readline( "«В каком году произошло крещение Руси?». Варианты: 810, 990 или 740 год\n");

    if($question === 990){
        echo "Ура! Ответ правильный";
        break;
    }
    if ($question === 810 || $question === 740){
        echo "Ответ не правильный";
        break;
    }
}while(true);