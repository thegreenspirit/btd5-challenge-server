<?php
$challenge = '';
date_default_timezone_set('UTC');

// nk randomized the challenges after June 30th, and im not making challenges so...
$randomSeed = srand(floor(time() / (60*60*24)));

function randomDate($start_date, $end_date) {
    // Convert to timestamps
    $min = strtotime($start_date);
    $max = strtotime($end_date);

    // Generate random number using above bounds
    $val = rand($min, $max);

    // Convert back to desired date format
    return date('Ymd', $val);
}

$randomDate = randomDate("2012-01-27", "2018-06-30");
$currentMonth = file('../../../dcvault/challenges-month-' . substr($randomDate, 0, -2));

$challenge_b64_data = trim($currentMonth[substr($randomDate, -2) - 1]);
$challenge_json_data = base64_decode(substr($challenge_b64_data, 8));

// this apparently changes the "Play Today's Challenge" text to "[date]'s Challenge", which is not what we want
// $challenge_fixed_json_data = str_replace('\"' . substr($challenge_b64_data, 0, 8) . '\"', 'null', $challenge_json_data);

// solution
$challenge_fixed_json_data = str_replace('"' . substr($challenge_b64_data, 0, 8) . '"', 'null', $challenge_json_data);

$challenge = base64_encode($challenge_fixed_json_data);
echo $challenge;
?>