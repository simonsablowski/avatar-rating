<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="Content-Language" content="en"/>
		<title><?php echo $title; ?></title>
		<link href="<?php echo $basePath; ?>css/screen.css" rel="stylesheet" type="text/css" media="screen"/>
		<link type="image/x-icon" href="<?php echo $basePath; ?>img/favicon.ico" rel="shortcut icon"/>
	</head>
	<body>
		<div id="document">
			<div id="header">
				<h1>
					<a href="<?php echo $basePath; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a>
				</h1>
			</div>
			<div id="body">
				<div id="content">
<?php if (!$done): ?>
					<form action="<?php echo $basePath; ?>" method="post">
						<input type="hidden" name="image" value="<?php echo $image; ?>"/>
						<fieldset class="fieldset">
							<div class="step">
								<?php printf($stepFormat, $step, $amountSteps); ?>
							</div>
							<div class="image">
								<img src="<?php echo $basePath; ?>img/<?php echo $image; ?>" alt="<?php echo $image; ?>"/>
							</div>
							<ul>
<?php foreach ($options as $optionKey => $optionLabel): ?>
								<li>
									<input class="radio" id="rating<?php echo $optionKey; ?>" type="radio" name="rating" value="<?php echo $optionKey; ?>"/>
									<label for="rating<?php echo $optionKey; ?>">
										<?php echo $optionLabel; ?>
									</label>
								</li>
<?php endforeach; ?>
							</ul>
							<input class="submit" type="submit" name="submit" value="<?php echo $submit; ?>"/>
						</fieldset>
					</form>
<?php else: ?>
					<p>
						<?php echo $thanks; ?>

					</p>
					<ul>
<?php foreach ($ratings as $image => $rating): ?>
						<li>
							<img src="<?php echo $basePath; ?>img/<?php echo $image; ?>" alt="<?php echo $image; ?>" style="width: 100px;"/> ... <?php echo $rating; ?>
						</li>
<?php endforeach; ?>
					</ul>
<?php endif; ?>
				</div>
			</div>
		</div>
		<div id="footer">
			<p id="copyright">
				&copy; 2012 <a href="http://www.simsab.net" title="Simon Sablowski">Simon Sablowski</a>
			</p>
		</div>
	</body>
</html>