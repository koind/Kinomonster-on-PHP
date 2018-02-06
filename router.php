<?php

function run($path)
{
	$parts = explode('/', $path);		

	if (count($parts) <= 3) {
		
		if ($parts[0] == '') {
			$parts[0] = 'index';
			$parts[1] = 'home';
		}

		$filename = __DIR__ . '/controllers/' . $parts[0] . '.php';
	    if (file_exists($filename)) {
	        include $filename;
	        $fun_name = $parts[1];	        

	        if (function_exists($fun_name)) {
	        	
	        	if (empty($parts[2])) {
	        		$fun_name();
	        	} else {
	        		$fun_name($parts[2]);
	        	}

	        } else {
	        	route_error('Страница не найдена');
	        }

	    } else {
	    	route_error('Страница не найдена');
	    }

	} else {
		route_error('Страница не найдена');	
	}

}

function route_error($message = 'Error')
{
	include __DIR__ . '/controllers/404.php';
	error($message);
}