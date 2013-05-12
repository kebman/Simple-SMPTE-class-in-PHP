<?php require_once('library/timecode.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test of Some Simple SMPTE classes in PHP</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
	<meta charset="utf-8">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://blockchain.info//Resources/wallet/pay-now-button.js"></script>
</head>
<body>
<header><h1>Some simple SMPTE classes in PHP</h1></header>
<section>
	<article>
		<h1>There and back again:</h1>
		<h3>SMPTE_to_frames()</h3>
		<h4>Test of instantiation</h4>
		<p>Dumping object info: 
		<?php 
		$frames = new SMPTE_to_frames();
		var_dump($frames); ?></p>
		<h4>Compute frames</h4>
		<p>SMPTE string to be converted: <?php 
		$smpteA = "00:05:24:13";
		echo $smpteA;
		?></p>
		<p>Computed frames: <?php 
		$frames = $frames->computeFrames($smpteA);
		var_dump($frames);
		?></p>
		<h3>frames_to_SMPTE()</h3>
		<h4>New instance test</h4>
		<p>Dumping object info: <?php 
		$smpte = new frames_to_SMPTE();
		var_dump($smpte);

		?></p>
		<h4>Compute SMPTE</h4>
		<p>Frames to be converted: <?php 
		echo $frames;
		?></p>
		<p>Computed SMPTE string: <?php 
		$smpte = $smpte->computeSmpte($frames);
		echo $smpte;
		?>
	</article>
</section>
<footer>
	<div style="font-size:16px;margin:0 auto;width:300px" class="blockchain-btn"
     data-address="1Dzh4YhhCiCRUQMPNcps9LwVQbvfXaPVdM"
     data-shared="false">
    <div class="blockchain stage-begin">
        <img src="https://blockchain.info//Resources/buttons/donate_64.png"/>
        <p>If you like the code, consider donating :)</p>
    </div>
    <div class="blockchain stage-loading" style="text-align:center">
        <img src="https://blockchain.info//Resources/loading-large.gif"/>
    </div>
    <div class="blockchain stage-ready">
         <p align="center">Please Donate To Bitcoin Address: <b>[[address]]</b></p>
         <p align="center" class="qr-code"></p>
    </div>
    <div class="blockchain stage-paid">
         Donation of <b>[[value]] BTC</b> Received. Thank You.
    </div>
    <div class="blockchain stage-error">
        <font color="red">[[error]]</font>
    </div>
</div></footer>
</body>
</html>