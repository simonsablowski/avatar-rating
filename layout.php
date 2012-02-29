<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="Content-Language" content="en"/>
		<title><?php print $title; ?></title>
		<link href="<?php print $basePath; ?>css/screen.css" rel="stylesheet" type="text/css" media="screen"/>
		<link type="image/x-icon" href="<?php print $basePath; ?>img/favicon.ico" rel="shortcut icon"/>
	</head>
	<body>
		<div id="document">
			<div id="header">
				<h1>
					<a href="<?php print $basePath; ?>" title="<?php print $title; ?>"><?php print $title; ?></a>
				</h1>
			</div>
			<div id="body">
				<div id="content">
<?php if ($started && !$done): ?>
					<div>
						<form action="<?php print $basePath; ?>" method="post">
							<input type="hidden" name="image" value="<?php print $image; ?>"/>
							<fieldset class="fieldset">
								<div class="step">
									<?php printf($stepFormat, $step, $amountSteps); ?>

								</div>
								<p class="image">
									<img src="<?php print $basePath; ?>img/<?php print $image; ?>" alt="<?php print $image; ?>"/>
								</p>
								<div class="form">
									<ul>
<?php foreach ($ratingOptions as $key => $label): ?>
										<li>
											<input class="radio" id="rating<?php print $key; ?>" type="radio" name="rating" value="<?php print $key; ?>"/>
											<label for="rating<?php print $key; ?>">
												<?php print $label; ?>
											</label>
										</li>
<?php endforeach; ?>
									</ul>
									<p>
										<input class="submit" type="submit" name="submit" value="<?php print $submitRating; ?>"/>
									</p>
								</div>
							</fieldset>
						</form>
					</div>
<?php elseif (!$started): ?>
					<p>
						<?php print nl2br($welcome1); ?>

					</p>
					<div class="preview">
<?php foreach ($previewImages as $image): ?>
						<img src="<?php print $basePath; ?>img/<?php print $image; ?>" alt="<?php print $image; ?>"/>
<?php endforeach; ?>
					</div>
					<p>
						<?php print nl2br($welcome2); ?>

					</p>
					<div>
						<form action="#">
							<fieldset class="fieldset">
								<ul>
<?php foreach ($ratingOptions as $key => $label): ?>
									<li>
										<input class="disabled radio" disabled="disabled" id="rating<?php print $key; ?>" type="radio" name="rating" value="<?php print $key; ?>"/>
										<label for="rating<?php print $key; ?>">
											<?php print $label; ?>
										</label>
									</li>
<?php endforeach; ?>
								</ul>
							</fieldset>
						</form>
					</div>
					<p>
						<?php print nl2br($welcome3); ?>

					</p>
					<div>
						<form action="<?php print $basePath; ?>" method="post">
							<fieldset class="fieldset">
								<p>
									<?php print $genderText; ?>

<?php foreach ($genderOptions as $key => $label): ?>
									<input class="radio" id="gender<?php print $key; ?>" type="radio" name="gender" value="<?php print $key; ?>"/>
									<label for="gender<?php print $key; ?>">
										<?php print $label; ?>
									</label>
<?php endforeach; ?>
								</p>
								<p>
									<?php print $ageText; ?>

									<select name="age">
<?php foreach ($ageRange as $option): ?>
										<option value="<?php print $option; ?>"><?php print $option; ?></option>
<?php endforeach; ?>
									</select>
								</p>
								<p>
									<input class="submit" type="submit" name="submit" value="<?php print $submitStart; ?>"/>
								</p>
							</fieldset>
						</form>
					</div>
<?php elseif ($done): ?>
					<div>
<?php if (!$ready): ?>
						<p>
							<?php print nl2br($thanks1); ?>

						</p>
						<div>
							<form action="<?php print $basePath; ?>" method="post">
								<fieldset class="fieldset">
									<p>
										<?php print $generalExperienceText; ?>

									</p>
									<p>
										<select name="generalExperience">
<?php foreach ($generalExperienceOptions as $key => $label): ?>
											<option value="<?php print $key; ?>"><?php print $label; ?></option>
<?php endforeach; ?>
										</select>
									</p>
									<p>
										<?php print $specificExperienceText; ?>

									</p>
									<p>
<?php foreach ($specificExperienceOptions as $key => $label): ?>
										<input class="radio" id="specificExperience<?php print $key; ?>" type="radio" name="specificExperience" value="<?php print $key; ?>"/>
										<label for="specificExperience<?php print $key; ?>">
											<?php print $label; ?>
										</label>
<?php endforeach; ?>
									</p>
									<p>
										<?php print $understandabilityText; ?>

									</p>
									<p>
<?php foreach ($understandabilityOptions as $key => $label): ?>
										<input class="radio" id="understandability<?php print $key; ?>" type="radio" name="understandability" value="<?php print $key; ?>"/>
										<label for="understandability<?php print $key; ?>">
											<?php print $label; ?>
										</label>
<?php endforeach; ?>
									</p>
									<p>
										<?php print $satisfactionText; ?>

									</p>
									<p>
<?php foreach ($satisfactionOptions as $key => $label): ?>
										<input class="radio" id="satisfaction<?php print $key; ?>" type="radio" name="satisfaction" value="<?php print $key; ?>"/>
										<label for="satisfaction<?php print $key; ?>">
											<?php print $label; ?>
										</label>
<?php endforeach; ?>
									</p>
									<p>
										<input class="submit" type="submit" name="submit" value="<?php print $submitSave; ?>"/>
									</p>
								</fieldset>
							</form>
						</div>
<?php else: ?>
						<p>
							<?php print nl2br($thanks2); ?>

						</p>
						<ul>
<?php foreach ($ratings as $image => $rating): ?>
							<li class="thumbnail">
								<img src="<?php print $basePath; ?>img/<?php print $image; ?>" alt="<?php print $image; ?>"/> ... <?php print $rating; ?>
							</li>
<?php endforeach; ?>
						</ul>
<?php endif; ?>
					</div>
<?php endif; ?>
				</div>
			</div>
		</div>
		<div id="footer">
			<p id="copyright">
				<?php print $copyright; ?>

			</p>
		</div>
	</body>
</html>