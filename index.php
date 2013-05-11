<?php require_once('timecode_lib.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test of Simple SMPTE class in PHP</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
	<meta charset="utf-8">
</head>
<body>
<header><h1>Simple SMPTE class in PHP</h1></header>
<section>
	<article>
		<h1>Just a test</h1>
		<h4>Test of instantiation</h4>
		<p>Dumping object info: 
		<?php 
		$timecode = new SMPTE_timecode();
		var_dump($timecode); ?></p>
		<h4>SMPTE to array</h4>
		<p>SMPTE string to be converted: <?php 
		$smpteA = "00:05:24:13";
		echo $smpteA;
		?></p>
		<p>Exploded array: <?php 
		$smptearray = $timecode->smpteToArray($smpteA);
		print_r($smptearray); ?></p>
	</article>
</section>
<footer></footer>
</body>
</html>