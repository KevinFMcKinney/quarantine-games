<html>

	<?php
		if (isset($_COOKIE['username'])) {
		} else {
			header('Location: https://fall-2020.cs.utexas.edu/cs329e-bulko/tjensen/project4/login.php');
		}	
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
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'League of Legends'";
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
		} else if ($_POST['cah'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'Cards Against Humanity'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Cards Against Humanity'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['cah'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Cards Against Humanity'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Cards Against Humanity'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		} else if ($_POST['fish'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'Fishbowl'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Fishbowl'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['fish'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Fishbowl'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Fishbowl'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		} else if ($_POST['qwiq'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'QwiqWit'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'QwiqWit'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['qwiq'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'QwiqWit'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'QwiqWit'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		} else if ($_POST['risk'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'Risk'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Risk'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['risk'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Risk'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Risk'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}else if ($_POST['chess'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'Chess'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Chess'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['chess'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Chess'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Chess'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}else if ($_POST['civ'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'Civilization VI'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Civilization VI'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['civ'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Civilization VI'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Civilization VI'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}else if ($_POST['hax'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'Haxball'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Haxball'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['hax'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Haxball'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Haxball'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}else if ($_POST['fifa'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'FIFA 2021'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'FIFA 2021'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['fifa'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'FIFA 2021'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'FIFA 2021'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}else if ($_POST['tony'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'Tony Hawks Pro Skater'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Tony Hawks Pro Skater'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['tony'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Tony Hawks Pro Skater'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Tony Hawks Pro Skater'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}else if ($_POST['3-5-8'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = '3-5-8'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = '3-5-8'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['3-5-8'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = '3-5-8'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = '3-5-8'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}else if ($_POST['500'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = '500'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = '500'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['500'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = '500'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = '500'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		} else if ($_POST['bridge'] == 'Interested') {
			$command = "SELECT num FROM games WHERE game = 'Bridge'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			$num = $num + 1;
			$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Bridge'";
			$newresult = $mysqli->query($sql);
			if (!$newresult) {
				die("Query Failed: ($mysqli->error <br> SQL command = $sql");
			}
		} else if ($_POST['bridge'] == 'Not Interested') {	
			$command = "SELECT num FROM games WHERE game = 'Bridge'";
			$result = $mysqli->query($command);
			if (!$result) {
				die("Query failed: ($mysqli->error <br> SQL command = $command");
			}
			while($row = $result->fetch_assoc()) {
				$num = $row["num"];
			}
			if ($num != 0) {
				$num = $num - 1;
				$sql = "UPDATE games SET num = " . $num . " WHERE game = 'Bridge'";
				$newresult = $mysqli->query($sql);
				if (!$newresult) {
					die("Query Failed: ($mysqli->error <br> SQL command = $sql");
				}
			}
		}

		header("Location: javascript://history.go(-1)");
	?>
</html>
