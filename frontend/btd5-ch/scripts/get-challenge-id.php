<?php
// unused(?) ingame, but i assumed this would get the challenge via ID
date_default_timezone_set('UTC');
ini_set('display_errors', 0);
$challengeId = $_GET['id'];

if (!isset($challengeId)) {
	exit('Error: No challenge id specified.');
}

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
		if ($challengeId == $challenge_data['id']) {
			exit(base64_encode(json_encode($challenge_data, true)));
		}
	}
}

echo 'Error: Challenge id not found.';
?>