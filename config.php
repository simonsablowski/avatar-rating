<?php

// the rated images: changing these in production can invalidate the data file

$images = array(
	'fAV01.png',
	'fAV02.png',
	'fAV03.png',
	'fAV04.png',
	'fAV05.png',
	'fAV06.png',
	'fAV07.png',
	'fAV08.png',
	'fAV09.png',
	'fAV10.png',
	'fAV11.png',
	'fAV12.png',
	'fAV13.png',
	'fAV14.png',
	'fAV15.png',
	'fAV16.png',
	'fAV17.png',
	'fAV18.png',
	'mAV01.png',
	'mAV02.png',
	'mAV03.png',
	'mAV04.png',
	'mAV05.png',
	'mAV06.png',
	'mAV07.png',
	'mAV08.png',
	'mAV09.png',
	'mAV10.png',
	'mAV11.png',
	'mAV12.png',
	'mAV13.png',
	'mAV14.png',
	'mAV15.png',
	'mAV16.png',
	'mAV17.png',
	'mAV18.png'
);

// rating options: all keys, values and the item order are configurable

$ratingOptions = array(
	1 => 'very attractive',
	2 => 'quite attractive',
	3 => 'attractive',
	4 => 'neutral',
	5 => 'unattractive',
	6 => 'quite unattractive',
	7 => 'very unattractive'
);

// gender options: all keys, values and the item order are configurable

$genderOptions = array(
	'm' => 'male',
	'f' => 'female'
);

// age range: this is fully configurable

$ageRange = range(12, 99);

// general experience options: all keys, values and the item order are configurable

$generalExperienceOptions = array(
	2 => 'very experienced',
	1 => 'somewhat experienced',
	0 => 'not experienced at all'
);

// specific experienceText options: all keys, values and the item order are configurable

$specificExperienceOptions = array(
	'y' => 'yes',
	'n' => 'no'
);

// understandability options: all kezs, values and the item order are configurable

$understandabilityOptions = array(
	'y' => 'yes',
	'n' => 'no'
);

// satisfaction options: all kezs, values and the item order are configurable

$satisfactionOptions = array(
	'y' => 'yes',
	'n' => 'no'
);

// all texts are fully configurable

$title = 'Online Avatar Attractiveness';
$welcome1 = "Welcome!\nOn the following page you will be shown a series of images of avatars similar to those below:";
$welcome2 = "We ask you to take a moment and tell us how you rate each avatar presented in terms of appearance on a scale of 1 to 7 as shown below:";
$welcome3 = "First off, please tell us a little about yourself:";
$genderText = "I am: ";
$ageText = "... and my age is: ";
$submitStart = 'Start';
$stepFormat = 'Step %d/%d';
$submitRating = 'Next';
$thanks1 = "Thank you for your help! If you don't mind, we have a few more questions before you go:";
$generalExperienceText = "How experienced would you judge yourself with online games and worlds? ";
$specificExperienceText = "Do you have any experience with Second Life? ";
$understandabilityText = "Were the instructions for the rating easy to understand? ";
$satisfactionText = "Are you happy with your answers? ";
$submitSave = 'Save';
$thanks2 = "At last, here you can review your results:";
$copyright = "All shown avatars were created within <a href=\"http://secondlife.com\" title=\"Second Life\">Second Life</a>, property of Linden Research, Inc.";

// the amount of rated images is configurable

$amountRated = 15;

// the amount of preview images on the welcome page is configurable

$amountPreview = 7;

// system settings

$basePath = '/avatars/';
$dataFile = 'data/results.txt';
$fieldDelimiter = ',';
$fieldEnclosure = '"';
