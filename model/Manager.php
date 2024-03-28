<?php

class Manager
{
	protected function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=transmission;charset=utf8', 'c1635810c', 'testtest');
		return $db;
	}
}
