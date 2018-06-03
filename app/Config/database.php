<?php

$database = new Lib\Model\DatabaseModel();

/**
 * 
 * @var array $database_config holds the database configuration
 *
 */
$database_config = [
	'driver' => 'mysql',
	'host' => 'phpmyadmin_php_mysql',
	'username' => 'root',
	'password' => 'test',
	'database' => 'assessment'
];

/**
 *
 * @var PDO Class $conn holds the PDO instance
 *
 */
$conn = $database->connect($database_config);