<?php

include_once 'classes/PriceBase.php';
include_once 'classes/PriceHourly.php';
include_once 'classes/PriceStudent.php';

echo 'Тариф: <br>';

echo '<pre>';
echo '<pre>';
echo 'Тариф "Базовый"<br>';
$base = new PriceBase(true);
echo 'К оплате: ' . $base->calculate(43, 24) . ' руб.';

echo '<pre>';
echo 'Тариф "Почасовой"<br>';
$hourly = new PriceHourly(true);
echo 'К оплате: ' . $hourly->calculate(0, 4) . ' руб.';

echo '<pre>';
echo 'Тариф "Студенческий"<br>';
$student = new PriceStudent(true);
echo 'К оплате: ' . $student->calculate(43, 24) . ' руб.';

