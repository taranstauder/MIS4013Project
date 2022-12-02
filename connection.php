<?php

$conn = "";

try {
	$servername = "159.89.47.44";
$username = "davyddov_davy0000";
$password = "mis4013project";
$dbname = "davyddov_mis4013project";

	$conn = new PDO(
		"mysql:host=$servername; dbname=davyddov_mis4013project",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
