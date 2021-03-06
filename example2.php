#!/usr/bin/php
<?php
//This example is useful for running via CLI
require_once('inc/nma.inc');

$nma = new NMA();

$shortopts = 'k:a:e:d:p:';
$longopts = array('apikey:', 'application:', 'event:', 'description:', 'priority:');
$options = getopt($shortopts, $longopts);

foreach ($options as $k => $v) {
	switch ($k) {
		case 'k':
		case 'apikey':
			$nma->addApiKey($v);
			break;
		case 'a':
		case 'application':
			$nma->setApplication($v);
			break;
		case 'e':
		case 'event':
			$nma->setEvent($v);
			break;
		case 'd':
		case 'description':
			$nma->setDescription($v);
			break;
		case 'p':
		case 'priority':
			$nma->setPriority($v);
			break;
	}
}

$nma->send();
?>
