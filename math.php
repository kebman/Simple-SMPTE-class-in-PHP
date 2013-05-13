<?php require_once('library/timecode.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test of Some Simple SMPTE functions in PHP</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
	<meta charset="utf-8">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://blockchain.info//Resources/wallet/pay-now-button.js"></script>
</head>
<body>
<header>
	<h1>Some simple SMPTE classes in PHP</h1>
	<nav><a href="index.php">Home</a></nav>
</header>
<section>
	<article>
		<h1>Some simple math</h1>
		<p>Compute the addition of SMPTE code A to B.</p>
		<ul>
			<li>Code A: <?php 
			$code_a = "00:05:24:13";
			echo $code_a;
			?></li>
			<li>Code B: <?php 
			$code_b = "00:00:52:08";
			echo $code_b;
			?></li>
		</ul>
		<p>Frame summation: <?php 
		$calc = new Frames_to_SMPTE();
		$code_a = $calc->computeFrames($code_a);
		$code_b = $calc->computeFrames($code_b);
		$code_c = $code_a+$code_b;
		echo "A ".$code_a ." + B ". $code_b." = C ".$code_c;
		?></p>
		<p>Converting Code C to SMPTE, we get: <?php
		$diff = $calc->computeSmpte($code_c);
		echo $diff;
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