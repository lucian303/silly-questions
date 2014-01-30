<?php

/**
 * A simple quicksort implementation for exercise purposes
 */
function quicksort($list)
{
	$listLength = count($list);
	print $listLength;
	if ($listLength <= 1) {
		return $list;
	}

	$pivot = floor($listLength / 2);
	$pivotValue = $list[$pivot];

	$lesser = $greater = array();

	foreach ($list as $value) {
		if ($value <= $pivotValue) {
			array_push($lesser, $value);
		}
		else {
			array_push($greater, $value);
		}
	}

	$return = array_merge(quicksort($lesser), quicksort($greater));
	return $return;
}

$array = [20, 5, 10, 1, 4, 3, 2];

print_r($array);
print_r(quicksort($array));
