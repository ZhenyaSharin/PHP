<?php


echo "Task1 <br>";

function makeChecked($check) {
	$radio_but = "<input type='radio' name='php' $check>";
		echo $radio_but . "<br>";

}

makeChecked(checked);


echo "Task2 <br>";
//исправлено значение по умолчанию

function getGuest($guest = "Гость") {

	echo "Здравствуйте, $guest. <br>";
}
getGuest();


echo "Task3 <br>";

$city1 = "Улан-Удэ";
$city2 = "Санкт-Петербург";
$city3 = "Москва";

$city_arr = array();
array_push($city_arr, $city1, $city2, $city3);
asort($city_arr);


foreach ($city_arr as $value) {
	echo $value . "<br>";
}


echo "Task4 <br>";

function convertStr($str) {
	echo strtoupper($str) . "<br>";
	$low = strtolower($str);
	echo $low . "<br>";
	echo ucwords($low) . "<br>";
}

convertStr("aLL yoUr baSE are belONG to US" . "<br>");


echo "Task5 <br>";

$str_hello = "<h1>Hello, world!</h1>";
$str_p = strip_tags($str_hello);
echo $str_p . "<br>";


echo "Task6 <br>";

$arr_6 = [
	'one' => 'first',
	'two' => 'second',
	'three' => 'third'
	];
$united = implode(',' , $arr_6);
echo "$united" . "<br>";



echo "Task7 <br>";

$date = '30-11-2017';
$newdate = date("Y.m.d", strtotime($date));
echo $newdate . "<br>";


echo "Task8 <br>";

$danstr = "/php/";
$newdanstr = trim($danstr, "/");
echo $newdanstr . "<br>";


echo "Task9 <br>";

$simple = 'просто строка.';

$unsmpl = rtrim($simple,".").".";
echo $unsmpl . "<br>";

echo "Task10 <br>";

function leftDays() {
	if (date(L) == 0) {
		$days = (365 - date(z));
		echo $days . "<br>";
	}
	if (date(L) == 1) {
		$days = (366 - date(z));
		echo $days . "<br>";
	}
}
leftDays();


echo "Task11 <br>";

function delCh(...$arrch) {
	$ch = 256;
	foreach ($arrch as $value) {
		if ($ch%$value == 0) {
			$nch = $ch/$value;
			echo $nch;
		}
	}
}

delCh(1, 5, 8, 10);