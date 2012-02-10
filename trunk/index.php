<?php

// get configured rated images, field options, texts and system settings

include 'config.php';

// variables available in layout, there are more in config.php

$started = false;
$done = false;
$saved = false;
$ratings = array();
$results = array();
$amountSteps = count($images);
$previewImages = array();

// initialize session and store images and ratings in it

session_start();

if (!isset($_SESSION['images'])) {
	$shuffled = $images;
	shuffle($shuffled);
	$_SESSION['images'] = $shuffled;
}

if (!isset($_SESSION['ratings'])) {
	$_SESSION['ratings'] = array();
}

// get preview images

$previewKeys = array_rand($images, $amountPreview);
foreach ($previewKeys as $key) {
	$previewImages[] = $images[$key];
}

// start asking for gender and age

if (isset($_POST['gender']) && isset($_POST['age'])) {
	$genderValid = isset($genderOptions[$_POST['gender']]);
	$ageValid = in_array($_POST['age'], $ageRange);
	if ($genderValid && $ageValid) {
		$_SESSION['personal'] = array(
			'gender' => $_POST['gender'],
			'age' => $_POST['age']
		);
		$_SESSION['started'] = true;
	}
}

if (isset($_SESSION['started']) && $_SESSION['started'] == true) {
	$started = true;
}

// save image rating

if (isset($_POST['rating']) && isset($_POST['image'])) {
	$ratingValid = isset($ratingOptions[$_POST['rating']]);
	$imageValid = $_POST['image'] == end($_SESSION['images']);
	if ($ratingValid && $imageValid) {
		$_SESSION['ratings'][$_POST['image']] = $_POST['rating'];
		array_pop($_SESSION['images']);
	}
}

// get current image and step

$image = end($_SESSION['images']);
$step = min($amountSteps, count($_SESSION['ratings']) + 1);

// prepare results for saving, there are no more ratings to be made

if (count($_SESSION['ratings']) == $amountSteps) {
	$done = true;
	foreach ($_SESSION['ratings'] as $image => $rating) {
		$results[array_search($image, $images)] = $rating;
		$ratings[$image] = isset($ratingOptions[$rating]) ? $ratingOptions[$rating] : null;
	}
	ksort($results);
}

// ?

if (isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z'])) {
	$xValid = isset($xOptions[$_POST['x']]);
	$yValid = in_array($_POST['y'], $yRange);
	$zValid = in_array($_POST['z'], $zRange);
	if ($xValid && $yValid && $zValid) {
		$_SESSION['personal'] = array_merge($_SESSION['personal'], array(
			'x' => $_POST['x'],
			'y' => $_POST['y'],
			'z' => $_POST['z']
		));
	}
}

// save all results in the data file

if ($done && isset($_SESSION['personal'])) {
	$results = array_merge($results, $_SESSION['personal']);
}

if (isset($_SESSION['saved']) && $_SESSION['saved'] == true) {
	$saved = true;
}

if ($done && !$saved) {
	$handle = fopen($dataFile, 'a');
	fputcsv($handle, $results, $fieldDelimiter, $fieldEnclosure);
	fclose($handle);
	$_SESSION['saved'] = true;
}

// render page

include 'layout.php';