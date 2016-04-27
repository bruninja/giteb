<?php
class Database
{
	private static $dbName = 'u309374182_anamn';
	private static $dbHost = 'mysql.hostinger.com.br';
	private static $dbUsername = 'u309374182_root';
	private static $dbUserPassword = 'cicebris2016';

	private static $cont = null;

	public function __construct(){
		die("função não é permitida");
	}

	public static function connect(){
		// Uma ligação através da aplicação inteira
		if (null == self::$cont){
			try{
				self::$cont = new PDO ("mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
			}catch(PDOException $e){
				die($e->getMessage());
			}
		}
		return self::$cont;
	}
	public static function disconnect(){
		self::$cont=null;
	}
}
