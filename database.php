<?php  

	define('HOST', '149.91.91.92');
	define('DB_NAME', 'FRIGOND.Shop');
	define('USER', 'phpuser');
	define('PASS', 'yQ0b$c37');

		$db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connect > OK !"
?>
	