<?php
date_default_timezone_set('UTC');

/*function getDatesFromRange($start, $end, $format = 'Y-m-d') {
    $array = array();
    $interval = new DateInterval('P1D');

    $realEnd = new DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

    foreach($period as $date) { 
        $array[] = $date->format($format);
    }

    return $array;
}*/

function getMonthsFromRange($start, $end, $format = 'Y-m') {
	$start    = (new DateTime($start))->modify('first day of this month');
	$end      = (new DateTime($end))->modify('first day of next month');
	$interval = DateInterval::createFromDateString('1 month');
	$period   = new DatePeriod($start, $interval, $end);
	
    $array = array();
	foreach ($period as $dt) {
		//echo $dt->format("Y-m") . "<br>\n";
		$array[] = $dt->format($format);
    }

    return $array;
}

$period = getMonthsFromRange("2012-01-27", "2018-06-30", "Ym");

foreach ($period as $month) {
	$currentMonth = preg_split('/\r\n|\n|\r/', file_get_contents('../../../dcvault/challenges-month-' . $month));
	
	foreach ($currentMonth as $k => $v) {
		$challenge_data = json_decode(base64_decode(substr($currentMonth[$k], 8)), true);
		echo $challenge_data['id'] . " ";
	}
}
?>