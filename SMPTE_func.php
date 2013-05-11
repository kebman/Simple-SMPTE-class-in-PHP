<?php 
$frameBase = 25; // PAL video now, but make it what you want

function smpteToArray($smpte) {
	// to do: turn SMPTE-code directly into correctly formatted arrays (without reduction)
	return void; 
}

function arrayToSmpte(&$array){
	$items  = count($array);
	$i      = 0;
	foreach ($array as $value) {
		if ($value < 10) {
			$value = "0{$value}";
		}
		echo $value;
		if (++$i != $items){ 
			echo ":";
		}
	}
}

function sumFrames(&$array) {
  $base     = $GLOBALS['frameBase'];
	$array    = array_values($array);

	$hours    = $array[0]*60*60*$base; // hours to frames
	$minutes  = $array[1]*60*$base; // minutes to frames
	$seconds  = $array[2]*$base; // seconds to frames
	$frames   = $array[3];

	return $allFrames = $frames+$seconds+$minutes+$hours;
}

function framesToHours($frames) {
  $base   = $GLOBALS['frameBase'];

	return $hours = $frames/60/60/$base;
}

function framesReductor($input) {
  $base   = $GLOBALS['frameBase'];
	$floor  = floor($input);
	$rest   = $input-$floor;

	return $reduction = $rest*$base;
}

function totalFramesReductor($frames) {
  $base     = $GLOBALS['frameBase'];
	$hours 		= framesToHours($frames, $base);
	$minutes	= framesReductor($hours, 60);
	$seconds	= framesReductor($minutes, 60);
	$frames		= framesReductor($seconds, $base);

	return $smpte = array('hours' => floor($hours), 'minutes' => floor($minutes), 'seconds' => floor($seconds), 'frames' => round($frames));
	// Beware: flooring and rounding like this might not be the best solution, but it's quick and dirty
	// Instead of rounding, the extra decimals might be used for adjusting offset when computing differences, for instance
}
