<?php
echo "Task 1 <br>";

$weekarr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];

$current_day = date('N');

foreach ($weekarr as $key => $value) {
	if ($current_day == ($key + 1)) {
		echo "<strong>".$value . "</strong><br>";
		# code...
	} else {
		echo $value . "<br>";
	}
}

echo "Task 2 <br>";

// задача по поиску счастливых билетов
// 1 000 000

$i = 0;
$n = 0;
while ($i < 1000000) {
	// if (i<10) {
		$ticket = str_pad($i, 6, 0, STR_PAD_LEFT);
	// }
		$half1 = substr($ticket, 0, 3);
		$half2 = substr($ticket, 3);

		$half1_sum = $half1[0] + $half1[1] + $half1[2]; 
		$half2_sum = $half2[0] + $half2[1] + $half2[2]; 

		if ($half1_sum == $half2_sum) {
			// echo "$ticket <br>";
			$n = $n+1;
		};
		$i++;


}
$schpercent = (($n/1000000)*100);
echo($schpercent.'%'."<br>");

echo "Task 3 <br>";

$current_year = date('Y');

if ($current_year%4 == 0) {
	echo($current_year . " - високосный год" . "<br>");
} else {
	echo($current_year . " - обычный год" . "<br>");
}
// РОМБ

echo "Task 4 <br>";

$i = 0;
while ($i < 40) {
	if (($i > 0)&($i%5 >0)&(strpbrk($i, '3'))>0) {
		echo($i . "<br>");
};
$i++;
}

echo "Task 5 <br>";

$height = 8;

for ($i = 0; $i < $height; $i++) {
	$prob = $prob."_";
		};
	$prstr = substr($prob, 0);
	for ($j = 0; $j< $height; $j++)  {
		$a = $height+$j;
		$b = $height-$j;
		$prstr[$a] = "*";
		$prstr[$b] = "*";
		echo "$prstr <br>";

	};
	for ($k=0; $k < $height ; $k++) { 
		$a=$k;
		$b = $height*2-$k;
		$prstr[$a] = "_";
		$prstr[$b] = "_";
		echo "$prstr <br>";
};

echo "Task 6 <br>";
echo '<table><tr>';
for ($i=1; $i < 10; $i++) { 
	for ($j=1; $j < 10; $j++) { 
		echo "<td>".($i*$j)."</td>";
	}
	if ($i!=10) {
		echo "<tr></tr>";
	};

}
echo "</tr></table>";

