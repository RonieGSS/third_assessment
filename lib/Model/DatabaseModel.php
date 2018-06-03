<?php

namespace Lib\Model;

class DatabaseModel
{
	private $servername;
	private $driver;
	private $username;
	private $password;
	private $database;

	public function connect($config)
	{
		$this->setServerName($config['host']);
		$this->setDriver($config['driver']);
		$this->setUsername($config['username']);
		$this->setPassword($config['password']);
		$this->setDatabase($config['database']);

		return $this->getPDO();
	}

	private function setServerName($servername)
	{
		$this->servername = htmlentities(trim($servername));
	}

	private function setDriver($driver)
	{
		$this->driver = htmlentities(lcfirst(trim($driver)));
	}

	private function setUsername($username)
	{
		$this->username = htmlentities(trim($username));
	}

	private function setPassword($password)
	{
		$this->password = htmlentities(trim($password));
	}

	private function setDatabase($database)
	{
		$this->database = htmlentities(trim($database));
	}

	private function getPDO()
	{
		try {
			$dsn = "{$this->driver}:host={$this->servername};dbname={$this->database}";
			$username = $this->username;
			$password = $this->password;

			return new \PDO($dsn, $username, $password);
		} catch(PDOException $e) {
			die("Connection failed: {$e->getMessage()}");
		}
	}

}