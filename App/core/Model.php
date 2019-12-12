<?php

namespace App\Core;

class Model {

	private static $instance;

	public static function getConn() {
		if(!isset(self::$instance)) {
			self::$instance = new \PDO ('mysql:host=127.0.0.1;port=8889;dbname=sistema_corretor;charset=utf8;', 'root', 'root');
		}

		return self::$instance;
	}

}