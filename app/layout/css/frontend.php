<?php	

	error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE);
	require_once(dirname(__FILE__)."/lessphp/lessc.inc.php");
	
	function autoCompileLess($inputFile, $outputFile) {
		
		$less = new lessc;	
		
		// load the cache
		$cacheFile = $inputFile.".cache";
		if (file_exists($cacheFile)) {
			$cache = unserialize(file_get_contents($cacheFile));
		} else {
			$cache = $inputFile;
		}
		
		// compile cache file
		$newCache = $less->cachedCompile($cache);
		if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
			file_put_contents($cacheFile, serialize($newCache));
			file_put_contents($outputFile, $newCache['compiled']);
		}
	
	}

	// compile
	if( is_writable('frontend.less') ) autoCompileLess('frontend.less', 'frontend.css');	
	
	// echo css
	header("Content-Type: text/css"); 
	echo file_get_contents('frontend.css');
	
?>