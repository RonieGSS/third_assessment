<?php

namespace Lib\Controller;

class RoutesController
{
	private $route = [];

	public function addRoute($url, $view = '')
	{
		$this->route[$url] = $url.$view;
	}

	public function requireRoute($url)
	{
		if (isset($this->route[$url])) {
			require_once('app/View' . $this->route[$url] . '.php');
		}
	}
}