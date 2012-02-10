<?php

// the rated images: changing these in production can invalidate the data file

$images = array(
	'cfAV01.png',
	'cfAV02.png',
	'cfAV03.png',
	'cfAV04.png',
	'cfAV05.png',
	'cfAV06.png',
	'cfAV07.png',
	'cfAV08.png',
	'cfAV09.png',
	'cfAV10.png',
	'cfAV11.png',
	'cfAV12.png',
	'cfAV13.png',
	'cfAV14.png',
	'cfAV15.png',
	'cfAV16.png',
	'cfAV17.png',
	'cfAV18.png',
	'cmAV01.png',
	'cmAV02.png',
	'cmAV03.png',
	'cmAV04.png',
	'cmAV05.png',
	'cmAV06.png',
	'cmAV07.png',
	'cmAV08.png',
	'cmAV09.png',
	'cmAV10.png',
	'cmAV11.png',
	'cmAV12.png',
	'cmAV13.png',
	'cmAV14.png',
	'cmAV15.png',
	'cmAV16.png',
	'cmAV17.png',
	'cmAV18.png'
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
$welcome2 = "We ask you to take a moment and tell us how attractive or unattractive you rate this avatar's appearance on a scale of 1 to 7 as shown below:";
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
$copyright = "&copy; 2012 <a href=\"http://www.simsab.net\" title=\"Simon Sablowski\">Simon Sablowski</a>";

// the configurable amount of preview images on the welcome page

$amountPreview = 7;

// system settings

$basePath = '/avatars/';
$dataFile = 'data/results.txt';
$fieldDelimiter = ',';
$fieldEnclosure = '"';