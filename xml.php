<?php

/**
 * Given an xml document with the following schema, please produce an order list of the steps
 *
 * @author Lucian Hontau
 */

$xmlText = <<<EOL
<root>
<instructions>
<step order="1">Cook spaghetti</step>
<step order="2">Add Sauce</step>
<step order="3">Drain from pot</step>
</instructions>
<dish>Pasta</dish>
</root>
EOL;

try {
	$xml = simplexml_load_string($xmlText);
} catch (Exception $e) {
	print 'Improper XML';
	die;
}

$dish = $xml->dish;
$steps = $xml->instructions->step;

// Title
print '<p>' . $xml->dish . '</p>';

// Sort list
$sortSteps = array();
foreach ($steps as $step) {
	$orderNum = (int)$step->attributes()->order;
	$sortSteps[$orderNum] = (string)$step;
}

// Print list, already presorted so numbers come out correctly
print '<ol>';
foreach ($sortSteps as $step) {
	print "<li>$step</li>";
}
print '</ol>';
