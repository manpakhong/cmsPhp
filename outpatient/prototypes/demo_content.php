      <?php 

		function determineRelativeUrl($fileName){
			global $folder;
			if (isset($folder)){
				$fileName = $folder . '/'. $fileName;
			}

	      	$path = realpath($fileName);

			// $pattern =  preg_quote($_SERVER['DOCUMENT_ROOT'], '/');
			$pattern =  $_SERVER['DOCUMENT_ROOT'];
			
			$urlRoot = url();
			$pattern = str_replace('\\', '/', $pattern);
			$path = str_replace('\\', '/', $path);
			if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME']=='127.0.0.1'){
				$urlRoot = 'http://localhost';
			}
			// echo 'pattern:' . $pattern;
			// echo 'urlRoot:' . $urlRoot;
			//$returnUrl = preg_replace('/' . 'c:\\xampp\\htdocs' .'/', $urlRoot, $path, 1);
			// echo 'path:' . $path;		
			// echo 'pattern:' . $pattern;
			$returnUrl = str_replace($pattern, $urlRoot, $path);	

			return $returnUrl;
		}
		function url(){
		  $fullUrl = sprintf(
		    "%s://%s%s",
		    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		    $_SERVER['SERVER_NAME'],
		    $_SERVER['REQUEST_URI']
		  );
		  
		  $pattern = preg_quote('http://', '/');
		  // echo $pattern . '<br/>';
		  // echo $fullUrl . '<br/>';
		  $replaceString = '';
		  $returnUrl = preg_replace('/' . $pattern . '/', $replaceString, $fullUrl, 1);

		  $urlArray = explode("/", $returnUrl);
		  $prefix = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://';
		  return $prefix . $urlArray[0];
		}		

	  ?>
	  <a href="<?php echo determineRelativeUrl('observation.php'); ?>">Blood Pressure, Pulse Rate, and Pulse Pressure Record</a><br/>
      <a href= "<?php echo determineRelativeUrl('jqDragDrop.php'); ?>" >User defined questionnaire</a><br/>
      <a href="<?php echo determineRelativeUrl('triage.php'); ?>">Triage GCS and Graph</a><br/>
      <!-- <a href="<?php echo determineRelativeUrl('ViewportSample.php'); ?>">ExtJs Viewport</a><br/> -->
      <a href="<?php echo determineRelativeUrl('main_layout.php'); ?>">Main Layout</a><br/>
      <a href="<?php echo determineRelativeUrl('consultation_list.php'); ?>">Consultation List</a><br/>
      <a href="<?php echo determineRelativeUrl('flow_stage.php'); ?>">Flow Stage</a><br/>
      <a href="<?php echo determineRelativeUrl('alert.php'); ?>">Alert</a><br/>
      <a href="<?php echo determineRelativeUrl('systemError.php'); ?>">System Message Standard format and function</a><br/>
      <a href="<?php echo determineRelativeUrl('comboSample.php'); ?>">Common Drop Down Combo Box</a>