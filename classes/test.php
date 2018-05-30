<?php
count_date();
function count_date()
{
$day=date('t');
                                $m=date('n');
                                $yr=date('y');
								
$dys=cal_days_in_month(CAL_GREGORIAN, $m, $yr);
$c=0;
for($i=1;$i<=$dys;$i++){
	if($day == date('t',mktime(0,0,0,$m,$i,$yr)))
	$c++;
}
echo $dys;
return $c;
}?>


