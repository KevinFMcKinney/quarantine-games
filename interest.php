<html>

	<?php
		$server = "fall-2020.cs.utexas.edu";
		$user = "cs329e_bulko_tjensen";
		$pwd = "Cork!Legion!Oslo";
		$dbName = "cs329e_bulko_tjensen";
		$mysqli = new mysqli ($server, $user, $pwd, $dbName);
		if ($mysqli->connect_errno) {
			die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
		} else {}
		
		if ($_POST['tba'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = \"tba\"";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = \"tba\"";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['tba'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = \"tba\"";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = \"tba\"";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		} else if ($_POST['league'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = \"league\"";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = \"league\"";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['league'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = \"league\"";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = \"league\"";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}else if ($_POST['runescape'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = \"runescape\"";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = \"runescape\"";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['runescape'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = \"runescape\"";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = \"runescape\"";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}

		header("Location: https://fall-2020.cs.utexas.edu/cs329e-bulko/tjensen/project4/adventure.php");
	?>
</html>
