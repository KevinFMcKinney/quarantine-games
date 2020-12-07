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
			$command = "SELECT num FROM games WHERE game = 'Text Based Adventures'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Text Based Adventures'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['tba'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Text Based Adventures'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Text Based Adventures'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		} else if ($_POST['league'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'League of Legends'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'League of Legends'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['league'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'League of Legends'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = ''League of Legends";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}else if ($_POST['runescape'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'Runescape'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Runescape'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['runescape'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Runescape'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Runescape'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}else if ($_POST['mines'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'Minesweeper'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Minesweeper'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['mines'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Minesweeper'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Minesweeper'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		} else if ($_POST['picapix'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'Pic-a-Pix'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Pic-a-Pix'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['picapix'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Pic-a-Pix'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Pic-a-Pix'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}

		header("Location: https://fall-2020.cs.utexas.edu/cs329e-bulko/tjensen/project4/adventure.php");
	?>
</html>
