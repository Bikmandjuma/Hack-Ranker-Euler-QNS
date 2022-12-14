<?php

function fibonoci($num,$f=0,$s=1){
	$sum=0;
	$fib=array($f,$s);
	for ($i=1; $i <=$num ; $i++) { 
		$fib[]=$fib[$i]+$fib[$i-1];
	}

	$test=$fib;

	foreach ($test as $key => $value) {
		if($value%2 == 0){
			$sum+=$value;
		}		
	}

	echo $sum."\n";
}
print_r(fibonoci(5));

function fibonocis($num,$f=0,$s=1){
	$sum=0;
	$fib=array($f,$s);
	for ($i=1; $i <=$num ; $i++) { 
		$fib[]=$fib[$i]+$fib[$i-1];
	}

	$test=$fib;

	foreach ($test as $key => $value) {
		if($value%2 == 0){
			$sum+=$value;
		}		
	}

	echo $sum;
}
print_r(fibonocis(10));


?>