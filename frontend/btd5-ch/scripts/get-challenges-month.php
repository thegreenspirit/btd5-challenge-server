<?php
ini_set('display_errors', 0);
$month = $_GET['month'];

// cache busting stuff(?)
function getAllVaultMonths() {
    $root = scandir("../../../dcvault");
    foreach($root as $value) {
        if($value === '.' || $value === '..') {continue;}
        if(is_file("../../../dcvault/$value")) {
			$result["$value"]=substr("$value", 17);
			continue;
		}
        foreach(getAllVaultMonths("$dir/$value") as $value2) {
            $ogName = basename($value2);
            $result[dirname($value2) . "/$ogName"]=$value2;
        }
    }

    return $result;
}

if (!$month) {
	exit("Error: No month specified.");
}

$allVaultMonths = getAllVaultMonths();

foreach ($allVaultMonths as $vaultMonth) {
	if ($vaultMonth == $month) {
		exit(file_get_contents("../../../dcvault/challenges-month-{$vaultMonth}"));
	}
}
echo "Error: Month not found or wrong month format.";
?>