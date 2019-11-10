<?php

function APS_LO ($mark) {
	$total = 0;
	if ($mark >= 90)
	{
		$total = 4 ;
	} else if ($mark >= 80 and $mark < 90)
	{
		$total = 3 ;
	}else if ($mark >= 70 and $mark < 80)
	{
		$total = 2 ;
	}else if ($mark >=60 and $mark < 70)
	{
		$total = 1 ;
	}
return $total;
}

?>
