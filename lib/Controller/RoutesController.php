<?php

namespace Lib\Controller;

/**
 * Responsible for routing
 *
 */
class RoutesController
{
	/**
	 * @var route array, list of added routes
	 */
	private $route = [];

	/**
	 * Add routes
	 *
	 * @param $url string the route url to add
	 * @param $view string the view page to request for a given route
	 */
	public function addRoute($url, $view = 'index')
	{
		$this->route[$url] = (preg_match('/\/$/', $url)) ? 
							 $url.$view : ($view != 'index') ? 
							 			  "/{$view}" : $url;
	}

	/**
	 * Gets the view page requested by the route url
	 *
	 * @param $url string the requested route url
	 */
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