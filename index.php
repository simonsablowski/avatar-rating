<?php

include 'config.php';

$done = false;
$ratings = array();
$results = array();
$amountSteps = count($images);

session_start();

if (!isset($_SESSION['images'])) {
	$shuffled = $images;
	shuffle($shuffled);
	$_SESSION['images'] = $shuffled;
}

if (!isset($_SESSION['ratings'])) {
	$_SESSION['ratings'] = array();
}

if (isset($_POST['rating']) && isset($_POST['image'])) {
	$_SESSION['ratings'][$_POST['image']] = $_POST['rating'];
	array_pop($_SESSION['images']);
}

$image = end($_SESSION['images']);

$step = min($amountSteps, count($_SESSION['ratings']) + 1);

if (count($_SESSION['ratings']) == $amountSteps) {
	$done = true;
	foreach ($_SESSION['ratings'] as $image => $rating) {
		$results[array_search($image, $images)] = $rating;
		$ratings[$image] = isset($options[$rating]) ? $options[$rating] : null;
	}
	ksort($results);
}

if ($done && !isset($_SESSION['saved'])) {
	$handle = fopen($dataFile, 'a');
	fputcsv($handle, $results);
	fclose($handle);
	
	$_SESSION['saved'] = true;
}

include 'layout.php';