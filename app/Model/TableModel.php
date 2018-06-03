<?php

namespace App\Model;

class TableModel
{
	public function conn()
	{
		require_once('app/Config/database.php');
		
		return $conn;
	}
}