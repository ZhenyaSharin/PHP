<?php

// Задачки к субботе:
// 1. Создать две целочисленных переменных и вывести на экран результат выполнения над ними математических операторов.


echo "Task1 <br>";

$a = 25;
$b = 12;

$sum = $a + $b;
$minus = $a - $b;
$mltply = $a * $b;
$dr = $a / $b;

echo "сумма чисел: ". $sum ."<br>";
echo "разность чисел: ". $minus ."<br>";
echo "произведение чисел: ". $mltply ."<br>";
echo "частное чисел: ". $dr ."<br>";
// 2. Даны два числа. Найдите сумму их квадратов. 
echo "Task2 <br>";


$fst = 5;
$sec = 9;

$rez = (($fst**2)+($sec**2));

echo "Сумма квадратов чисел: ".$rez."<br>";
// 3. Рассчитать скорость движения машины и вывести её в удобочитаемом виде. Вывод в км/ч, м/c.
// Исходные данные: Пройденный путь - S; Время движения - t.
echo "Task3 <br>";

$s = 100;
$t = 2;

$vms = (($s*1000)/($t*60));  
$vkh = ($s/$t);

echo "Скорость равна: ".$vkh."км/ч"." / ".$vms."м/c."."<br>"; 
// 4. Создайте константу и присвойте ей значение. Выведите значение созданной константы. Попытайтесь изменить ее значение.
$cnst = 9;

echo "Константа равна = ".$cnst."<br>";

$cnst = 11;

echo "Константа равна = ".$cnst."<br>";

if ($cnst = 11) {
	echo "Константа изменилась";
} else {
	echo "Константа не изменилась";
}
?>