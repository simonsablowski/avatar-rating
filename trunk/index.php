<?php

// get configured rated images, field options, texts and system settings

include 'config.php';

// variables available in layout, there are more in config.php

$started = false;
$done = false;
$ready = false;
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

// save more personal information

if (isset($_POST['generalExperience']) && isset($_POST['specificExperience'])
		&& isset($_POST['understandability']) && isset($_POST['satisfaction'])) {
	$generalExperienceValid = isset($generalExperienceOptions[$_POST['generalExperience']]);
	$specificExperienceValid = isset($specificExperienceOptions[$_POST['specificExperience']]);
	$understandabilityValid = isset($understandabilityOptions[$_POST['understandability']]);
	$satisfactionValid = isset($satisfactionOptions[$_POST['satisfaction']]);
	if ($generalExperienceValid && $specificExperienceValid
			&& $understandabilityValid && $satisfactionValid) {
		$_SESSION['personal'] = array_merge($_SESSION['personal'], array(
			'generalExperience' => $_POST['generalExperience'],
			'specificExperience' => $_POST['specificExperience'],
			'understandability' => $_POST['understandability'],
			'satisfaction' => $_POST['satisfaction']
		));
		$_SESSION['ready'] = true;
	}
}

if (isset($_SESSION['ready']) && $_SESSION['ready'] == true) {
	$ready = true;
}

// save all results in the data file

if ($done && isset($_SESSION['personal'])) {
	$results = array_merge($results, $_SESSION['personal']);
}

if (isset($_SESSION['saved']) && $_SESSION['saved'] == true) {
	$saved = true;
}

if ($done && $ready && !$saved) {
	$handle = fopen($dataFile, 'a');
	fputcsv($handle, $results, $fieldDelimiter, $fieldEnclosure);
	fclose($handle);
	$_SESSION['saved'] = true;
}

// render page

include 'layout.php';