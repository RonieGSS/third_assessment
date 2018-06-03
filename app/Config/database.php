<?php

$database = new Lib\Model\DatabaseModel();

$config = [
	'driver' => 'mysql',
	'host' => 'phpmyadmin_php_mysql',
	'username' => 'root',
	'password' => 'test',
	'database' => 'assessment'
];

$conn = $database->connect($config);