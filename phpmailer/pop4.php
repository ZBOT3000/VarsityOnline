<?php

function testings($a,$b){
	if($a>$b){
	 return $a;
	}
	else if($a<$b){
		return $a+$b;
	}
	
	else if($a=$b){
		return $a;
	}
	else
		return $b;
}

function marks($mark)
{
	$total =0 ;
	if ($mark >= 80 and $mark <101)
	{
		$total = 7 ;
	}else if ($mark >= 70 and $mark < 80)
	{
		$total = 6 ;
	}else if ($mark >=60 and $mark < 70)
	{
		$total = 5 ;
	}else if ($mark >= 50 and $mark < 60)
	{
		$total = 4 ;
	}else if ($mark >= 40 and $mark < 50)
	{
		$total = 3 ;
	}
	return $total;
	}


 ?>
