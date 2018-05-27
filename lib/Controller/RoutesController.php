<?php

namespace Lib\Controller;

class RoutesController
{
	private $route = [];

	public function addRoute($url, $view = 'index')
	{
		$this->route[$url] = (preg_match('/\/$/', $url)) ? 
							 $url.$view : ($view != 'index') ? 
							 			  "/{$view}" : $url;
	}

	public function requireRoute($url)
	{
		if (isset($this->route[$url])) {
			require_once('app/View/Common/header.php');
			require_once('app/View' . $this->route[$url] . '.php');
			require_once('app/View/Common/footer.php');
		} else {
			$redirectUrl = str_replace('index.php','', $_SERVER['PHP_SELF']);
			header("Location: {$redirectUrl}");
			die();
		}
	}
}