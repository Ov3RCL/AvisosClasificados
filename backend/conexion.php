<?php 

	const SERVER = "localhost";
	const DATABASE = "clasificados";
	const USER = "root";
	const PASS = "";
	const CONEXION = "mysql:host=".SERVER.";dbname=".DATABASE;

	class Conexion {
		public static function Conectar() {
			$link = PDO(CONNEXION,USER,PASS,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF-8")
			);

			return $link;
		}
	}

 ?>