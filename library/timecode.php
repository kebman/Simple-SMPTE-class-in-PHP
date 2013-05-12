<?php 
require_once('config.php');

// Class for converting SMPTE to frames and back again
class SMPTE_to_frames {
	public $framebase = PAL;
	// 1. validate input
	private function validateSMPTE($smpte) {
		// to do: check that incomming string is a proper timecode
		// regex here…
		return $smpte;
	}
	// 2. store input in array
	private function smpteToArray($smpte) {
		$array = explode(":", $smpte);
		foreach ($array as $key => $value) {
			$array[$key] = (int)$value;
		}
		return $array;
	}
	// 3. compute total frames from array
	private function reduceToFrames(&$array) {
		$base = $this->framebase;	
		$array		= array_values($array);
		$hours 		= $array[0]*60*60*$base; // hours to frames
		$minutes 	= $array[1]*60*$base; // minutes to frames
		$seconds 	= $array[2]*$base; // seconds to frames
		$frames 	= $array[3];
		return $allframes = $hours+$minutes+$seconds+$frames;
	}
	// 4. get result
	public function computeFrames($smpte) {
		$validated = $this->validateSMPTE($smpte);
		$array = $this->smpteToArray($validated);
		return $frames = $this->reduceToFrames($array);
	}
}
class Frames_to_SMPTE extends SMPTE_to_frames {
	// Frames to SMPTE:
	// 1. validate input
	private function validateFrames($frames) {
		// to do: check that 
		if (is_int($frames)) {
			return $frames;
		} else {
			// error…
			trigger_error("Frame number not valid", E_USER_ERROR);
		}
	}
	// 2. compute frames into array
	// Helper method A
	// Convert frames into hours (hour conversion)
	private function framesToHours($frames, $base) {
		return $hours = $frames/60/60/$base;
	}
	// Helper method B
	// Compute hour conversion into floored hours, minutes, seconds and frames
	// "Move" decimal-rest down the "chain"… 
	// …to compute SMPTE frames more accurately
	private function frameExpander($input, $base) {
		$floor = floor($input);
		$rest = $input-$floor;
		return $reduction = $rest*$base;
	}
	// Turn frames into an array
	private function framesToArray($frames) {
		$base		= $this->framebase;
		$hours 		= $this->framesToHours($frames, $base);
		$minutes	= $this->frameExpander($hours, 60);
		$seconds	= $this->frameExpander($minutes, 60);
		$frames		= $this->frameExpander($seconds, $base);
		return $smpte = array(floor($hours), floor($minutes), floor($seconds), round($frames));
		// Note: Rounding $frames may lead to drop frame…
	}
	// 3. make array into string
	public function arrayToSmpte($array) {
		$items 	= count($array);
		$i 		= 0;
		foreach ($array as $value) {
			if ($value < 10) {
				$value = "0{$value}";
			}
			echo $value;
			if (++$i != $items){ 
				echo ":";
			}
		}
		return $smpte; 
	}
	// 4. get result
	public function computeSmpte($frames) {
		$validated = $this->validateFrames($frames);
		$reduced = $this->framesToArray($validated);
		return $smpte = $this->arrayToSmpte($reduced);
	}

}
?>