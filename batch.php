<?php require_once('library/timecode.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test of Some Simple SMPTE functions in PHP</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
	<meta charset="utf-8">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://blockchain.info//Resources/wallet/pay-now-button.js"></script>
	<style type="text/css">
	ul {
		list-style-type: none;
	}
	</style>
</head>
<body>
<header>
	<h1>Some simple SMPTE classes in PHP</h1>
	<nav><a href="index.php">Home</a></nav>
</header>
<section>
	<article>
		<h1>Batch compute SMPTEs</h1>
		<p>Add A to many different B's…</p>
		<?php $batch = new Compute_SMPTE(); ?>
		<p>Set A: <?php 
		$code_a = "00:05:24:13";
		echo $code_a;
		$batch->set_a($code_a);
		?></p>
		<?php 
		// list of codes:
		$codes = array (
		"00:04:14:11",
		"00:04:23:07",
		"00:04:36:20",
		"00:04:55:11",
		"00:16:02:19",
		"00:16:50:18",
		"00:17:29:07",
		"00:18:17:18",
		"00:18:41:14",
		"00:19:33:05",
		"00:21:16:18",
		"00:22:43:01",
		"00:22:56:19",
		"00:23:36:10",
		"00:25:56:01",
		"00:28:09:12",
		"00:29:07:11",
		"00:30:36:01",
		"00:31:33:18",
		"00:32:02:24",
		"00:32:48:01",
		"00:35:57:04",
		"00:36:19:13");
		?>
		<h4>Comparison list</h4>
		<table><tr><td>Old code</td><td>New code</td></tr><?php 
		$new_codes = $batch->sync_codes($codes);
		foreach ($new_codes as $key => $value) {
			echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
		}
		?></table>
		<h4>Just the list of answers</h4>
		<ul><?php 
		foreach ($new_codes as $value) {
			echo "<li>".$value."</li>";
		}
		?></ul>
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