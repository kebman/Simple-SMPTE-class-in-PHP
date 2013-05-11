<?php 
class SMPTE_timecode {
	defined('PAL')	? null : define("PAL",	"25");
	defined('NTSC')	? null : define("NTCS",	"29.97");
	defined('FILM')	? null : define("FILM",	"24");
	public $framebase = PAL;

	private function smpteToArray() {
		// to do: turn SMPTE-code into correctly formatted arrays
		return void; 
	}

	public function arrayToSmpte(&$array){
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
		return void;
	}

	public function reduceToFrames(&$array) {
		$base 		= $GLOBALS['framebase'];
		$array 		= array_values($array);
		$hours 		= $array[0]*60*60*$base; // hours to frames
		$minutes 	= $array[1]*60*$base; // minutes to frames
		$seconds 	= $array[2]*$base; // seconds to frames
		$frames 	= $array[3];

		return $allframes = $frames+$seconds+$minutes+$hours;
	}

	protected function framesToHours($frames, $base) {
		return $hours = $frames/60/60/$base;
	}

	protected function framesReductor($input, $base) {
		$floor = floor($input);
		$rest = $input-$floor;

		return $reduction = $rest*$base;
	}

	public function totalFramesReductor($frames) {
		$base 		= $GLOBALS['framebase'];
		$hours 		= framesToHours($frames, $base);
		$minutes	= framesReductor($hours, 60);
		$seconds	= framesReductor($minutes, 60);
		$frames		= framesReductor($seconds, $base);

		return $smpte = array('hours' => floor($hours), 'minutes' => floor($minutes), 'seconds' => floor($seconds), 'frames' => round($frames));
	}

}
?>