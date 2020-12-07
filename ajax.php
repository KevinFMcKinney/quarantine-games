<!DOCTYPE HTML>

<html lang="en">
<head>
	<title>AJAX Request handler</title>
	<meta charset="UTF-8">
	<meta name="description" content="AJAX handler">
	<meta name="author" content="Thomas Jensen">
</head>
<body>
	
	<?php
		$server = "fall-2020.cs.utexas.edu";
		$user = "cs329e_bulko_tjensen";
		$pwd = "Cork!Legion!Oslo";
		$dbName = "cs329e_bulko_tjensen";
		$mysqli = new mysqli ($server, $user, $pwd, $dbName);
		if ($mysqli->connect_errno) {
			die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
		} else {}
		$sql = "SELECT * FROM games ORDER BY num DESC";
		$result = $mysqli->query($sql);
		if (!$result) {
			die("Query Failed: ($mysqli->error <br> SQL command = $sql");
		}
		$x = 0;
		if ($result->num_rows > 0) {
			while($x<5 && $row = $result->fetch_assoc()) {
				echo $x + 1 . '. ' . $row['game'] . '<br>';
				$x = $x + 1;
			}
		} else {}
?>
</body>
</html>
