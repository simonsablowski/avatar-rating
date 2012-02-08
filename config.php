<?php

$images = array(
	'cfAV1.png',
	'cfAV2.png',
	'cfAV3.png',
	'cfAV4.png',
	'cfAV5.png',
	'cfAV6.png',
	'cfAV7.png',
	'cfAV8.png',
	'cfAV9.png',
	'cfAV10.png',
	'cfAV11.png',
	'cfAV12.png',
	'cfAV13.png',
	'cfAV14.png',
	'cfAV15.png',
	'cfAV16.png',
	'cfAV17.png',
	'cfAV18.png',
	'cmAV1.png',
	'cmAV2.png',
	'cmAV3.png',
	'cmAV4.png',
	'cmAV5.png',
	'cmAV6.png',
	'cmAV7.png',
	'cmAV8.png',
	'cmAV9.png',
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

$ratingOptions = array(
	1 => 'very attractive',
	2 => 'quite attractive',
	3 => 'attractive',
	4 => 'neutral',
	5 => 'unattractive',
	6 => 'quite unattractive',
	7 => 'very unattractive'
);

$genderOptions = array(
	'm' => 'male',
	'f' => 'female'
);

$ageRange = range(12, 99);

$title = 'Online Avatar Attractiveness';
$submitStart = 'Start';
$submitRating = 'Next';
$stepFormat = 'Step %d/%d';
$welcome1 = "Welcome!\nOn the following page you will be shown a series of images of avatars similar to those below:";
$welcome2 = "We ask you to take a moment and tell us how attractive or unattractive you rate this avatar's appearance on a scale of 1 to 7 as shown below:";
$welcome3 = "First off, please tell us a little about yourself:";
$textGender = "I am: ";
$textAge = "... and my age is: ";
$thanks = "Thank you for your help! If you don't mind, we have a few more questions before you go:";

$amountPreview = 7;

$basePath = '/avatars/';
$dataFile = 'data.txt';