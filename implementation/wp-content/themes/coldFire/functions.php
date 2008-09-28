<?php
	
	function templateFile($file) {
		$templatedir = get_bloginfo('template_directory');
		echo "$templatedir/$file";
	}
	
?>