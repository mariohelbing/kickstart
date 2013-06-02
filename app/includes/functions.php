<?php

/**
 * Recursive glob()
 *
 * @link        http://php.net/glob
 * @author      HM2K <hm2k@php.net>
 * @version     $Revision: 1.2 $
 * @require     PHP 4.3.0 (glob)
 *
 * @param int $pattern
 *  	the pattern passed to glob()
 * @param int $flags
 *  	the flags passed to glob()
 * @param string $path
 *  	the path to scan
 * @return mixed
 *  	an array of files in the given path matching the pattern.
 *
 * example: $fileList = rglob("*", GLOB_MARK, 'C:\Users\Mario\Desktop\Dropbox\htdocs');
 *
 */
function rglob($pattern, $flags = 0, $path = '') {	
	if (!$path && ($dir = dirname($pattern)) != '.') {
	if ($dir == '\\' || $dir == '/') $dir = '';
	return rglob(basename($pattern), $flags, $dir . '/');
	}
	$paths = glob($path . '*', GLOB_ONLYDIR | GLOB_NOSORT);
	$files = glob($path . $pattern, $flags);
	foreach ($paths as $p) $files = array_merge($files, rglob($pattern, $flags, $p . '/'));
	return $files;
}

function print_r2($var, $text = false){ // debug function: print_r with pre 

	echo '<pre style="margin-bottom: 10px; font-family: monospace;">';
	if( $text ) echo '<strong style="background-color: yellow; color: black;">'.$text.':</strong>&nbsp;&nbsp;';
	print_r( $var );
	echo '</pre><br /><br />';

}

function mh_curPageURL( $with_get_params = TRUE ) {
	$pageURL = 'http';		
	if (isset($_SERVER["HTTPS"])) if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	
	// get parameter werden abgeschnitten
	if( $with_get_params === FALSE ){
		$arr = explode("?", $pageURL, 2);
		$pageURL = $arr[0];
	}
	
	return $pageURL;
}

?>
