<!DOCTYPE html>

<html lang="en">

<head>

	<title>Quarantine Games: Feedback</title>
	<meta charset="UTF-8">
	<meta name="description" content="Website about games that can be played during quarantine.">
    <meta name="author" content="Kevin McKinney">
    <link rel="stylesheet" href="content.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	
</head>

<div id="container">

    <div id="header">
        
        <div id="title">
            <a href="qgames-index.html" style="text-decoration:none"><h1>QUARANTINE GAMES</h1></a>
        </div>

        <div id="tabs">
            <button class="tablink" onclick="location.href = 'action.html';">Action</button>
            <button class="tablink" onclick="location.href = 'sports.html';">Sports</button>
            <button class="tablink" onclick="location.href = 'adventure.html';">Adventure</button>
            <button class="tablink" onclick="location.href = 'puzzle.html';">Puzzle</button>
            <button class="tablink" onclick="location.href = 'party.html';">Party</button>
            <button class="tablink" id="last-tab" onclick="location.href = 'strategy.html';">Strategy</button>
        </div>

    </div>
	
	<div id="content">
        
        <h2>Website Comments</h2>

        <?php 

            $db = new mysqli("fall-2020.cs.utexas.edu","cs329e_bulko_fergus","Cradle6early9Lunacy","cs329e_bulko_fergus");

            if ($db->connect_errno) {
                die('Connect Error: ' . $db->connect_errno .
                ": " . $db->connect_error);
            }

            if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

                if (trim($_POST["user"]) == "" || trim($_POST["com"]) == "") {
                    echo "<script>window.alert('Please enter all fields!')</script>";
                }

                else {
                    $user = $_POST["user"];
                    $com = $_POST["com"];
                    $newcom = "INSERT INTO comments (user, comment) VALUES ('{$user}','{$com}');";
                    $result = $db->query($newcom);
                }
                
            }

            $command = "SELECT * FROM comments;";
            $table = $db->query($command);

            foreach ($table as $row) {
                echo "<div class='box'>";
                    echo "<h3>{$row['user']}</h3>";
                    echo "<p>~\"{$row['comment']}\"</p>";
                echo "</div>";
            }

            
        ?> 

        <h2>Add A Comment:</h2>

        <div class="box" id="com">

            <form action="feedback.php" method="POST">
                <input type="text" placeholder="User" name="user"><br>
                <textarea placeholder="Comment" name="com" rows="4" cols="40"></textarea><br>
                <input type="submit" value="Submit">
            </form>

        </div>
        
        

	</div>

</div>


</html>