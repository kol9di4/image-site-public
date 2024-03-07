<?php
	function correctDate($dateTime):string{
		return substr($dateTime, 0, -3);
	}
	
    function checkControllerName(string $name) : bool{
        return !!preg_match('/^[aA-zZ0-9_-]+$/', $name);
    }

	function template(string $path, array $vars = []) : string{
		$systemTemplateRenererIntoFullPath = "$path.php"; 
		extract($vars);
		ob_start();
		include($systemTemplateRenererIntoFullPath);
		return ob_get_clean();
	}