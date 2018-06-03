<?php

namespace App\Model;

/**
 * TableModel Class
 *
 * Parent class of all app model classes
 * Note: All App Model Classes must extend TableModel
 */
class TableModel
{
	/**
	 * Connects to the database
	 *
	 * @return PDO Class $conn returns the PDO Instance
	 */
	protected function conn()
	{
		require_once('app/Config/database.php');
		
		return $conn;
	}
}