<?php

$number = cal_days_in_month(CAL_GREGORIAN, 1, 2022); // 31

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l");
echo "<br>";

echo "<br>";

echo "There were {$number}  days in August 2022 <br>";
echo "<br>";

echo " Employee Shift A Table <br>";
echo "<br>";
	
	$d=0;
	$n=2;
	$o=2;

for ($i=1; $i <=$number; $i++) { 
	$datetime = DateTime::createFromFormat('Y-m-d', '2022-01-'.$i);
	$d_n= $datetime->format('Y-m-d-');
	//echo $d_n.'<br>';
	if($d!=2 && $n==2 && $o==2){
		echo $d_n." Day <br>";
		$d++;
		if($d_n=="Monday"){
			$d=2;
			$n=0;
		}
		if($d==2){
			$n=0;
		}

	}else if($d==2 && $n!=2 && $o==2){
		echo $d_n." Night <br>";
		$n++;
		if($d_n=="Monday"){
			$n=2;
			$o=0;
		}
		if($n==2){
			$o=0;
		}
	}else if($d==2 && $n==2 && $o!=2){
		echo $d_n." Off <br>";
		$o++;
		if($d_n=="Monday"){
			$o=2;
			$d=0;

		}
		if($o==2){
			$d=0;
		}
	}

	// echo "d=".$d."<br>";
	// echo "n=".$n."<br>";
	// echo "o=".$o."<br>";

	
}

echo "<br>";

echo " Employee Shift B Table <br>";
echo "<br>";
	

echo "<br>";

echo " Employee Shift C Table <br>";
echo "<br>";
	
	



?>


