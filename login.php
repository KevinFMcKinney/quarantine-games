<?php
session_start();
if (!($_POST['created'] == 'Submit')){
    createUser();
}
else if (isset($_COOKIE['username'])){
    successfulLogIn();
}
else{
   checkUser();
}



function createUser(){
    $script = $_SERVER['PHP_SELF'];
    print <<<TOP
<html lang="en">

<head>

	<title>Quarantine Games</title>
	<meta charset="UTF-8">
	<meta name="description" content="A User Registration Page">
    <meta name="author" content="Uzair Saleem">
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">

</head>
<body>

    <div id="header">

    <div id="title">
        <a href="qgames-index.php" style="text-decoration:none"><h1>QUARANTINE GAMES</h1></a>
    </div>

    <div id="tabs">
            <button class="tablink" onclick="location.href = 'action.html';">Card Games</button>
            <button class="tablink" onclick="location.href = 'sports.html';">Sports</button>
            <button class="tablink" onclick="location.href = 'adventure.html';">Adventure</button>
            <button class="tablink" onclick="location.href = 'puzzle.html';">Puzzle</button>
            <button class="tablink" onclick="location.href = 'party.html';">Party</button>
            <button class="tablink" id="last-tab" onclick="location.href = 'strategy.html';">Strategy</button>
    </div>
    
    </div>

    <form action="$script" method="post" onsubmit="return validateUserGeneration()">
        <h2>Sign In/Up</h2>
        <table>
            <tr>
                <td id="words">Username:</td>
            </tr>
            <tr>
            <td><label><input id="username" name="user" type="text" required></label></td>
            </tr>
            <tr>
                <td id="words">Password:</td>
            </tr>
            <tr>
            <td><label><input id="password" name="pass" type="password" required></label></td>
            </tr>
            <tr>
                <td id="buttonRow"><input id="submitButton" type=submit name="created" value="Submit">
                    <input id="resetButton" type=reset  value="Clear"></td>
            </tr>
        </table>    
    </form>
    <script src="submit.js"></script>
</body>
</html>
TOP;

}


function checkUser(){
    $userUser = $_POST["user"];
    $userPass = $_POST["pass"];
    
    $server = "fall-2020.cs.utexas.edu";
    $dbUser = "cs329e_bulko_uzairs";
    $dbPass = "Pivot3mayor9suite";
    $dbName = "cs329e_bulko_uzairs";
    
    $mysqli = new mysqli ($server,$dbUser,$dbPass,$dbName);
    //read the entire file and put it in an array
    if ($mysqli->connect_errno) {
        die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
    }

    $command = 'SELECT * FROM passwords;';
    
    // Issue the query
    $result = $mysqli->query($command);
    
    // Verify the result
    if (!$result) {
        die("Query failed: ($mysqli->error <br> SQL command = $command");
    }
    
    $row = mysqli_fetch_row($result);
    $listOfUsers = array();
    
    while (!($row == false)){
        $listOfUsers[] = $row;
        $row = mysqli_fetch_row($result);
    }
   
    
 $matchfound = false;
    for($i =0; $i < (count($listOfUsers)); $i++){
        $userdata = $listOfUsers[$i];
        //do regex check on each array and see if user is registerd
        if ($userdata[0] == $userUser){
            $matchfound = true;
            if (trim($userdata[1]) == trim($userPass)){
                //pass right
                setcookie('username', $userUser, time()+3600);
                successfulLogIn();
            }
            else{
                //pas swrong
                wrongPassword();
                }   
        }
    }
    if (!$matchfound){
        $username = $mysqli -> real_escape_string($_POST['user']);
        $password = $mysqli -> real_escape_string($_POST['pass']);
        $command = "INSERT INTO passwords VALUES ( " . "'" . $username . "', " . "'" . $password . "' );";
        
        $result = $mysqli->query($command);
        // Verify the result
        if (!$result) {
            die("Query failed: ($mysqli->error <br> SQL command = $command");
        }
        //user registered
        setcookie("username", $userUser, time()+3600, "/");
        successfulRegistration();
    }
}

function wrongPassword(){
    $script = $_SERVER['PHP_SELF']; 
    print <<<TOP
<html lang="en">

<head>

	<title>Quarantine Games</title>
	<meta charset="UTF-8">
	<meta name="description" content="A User Registration Page">
    <meta name="author" content="Uzair Saleem">
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">

</head>
<body>

    <div id="header">
            
    <div id="title">
        <a href="qgames-index.php" style="text-decoration:none"><h1>QUARANTINE GAMES</h1></a>
    </div>

    <div id="tabs">
            <button class="tablink" onclick="location.href = 'action.html';">Card Games</button>
            <button class="tablink" onclick="location.href = 'sports.html';">Sports</button>
            <button class="tablink" onclick="location.href = 'adventure.html';">Adventure</button>
            <button class="tablink" onclick="location.href = 'puzzle.html';">Puzzle</button>
            <button class="tablink" onclick="location.href = 'party.html';">Party</button>
            <button class="tablink" id="last-tab" onclick="location.href = 'strategy.html';">Strategy</button>
    </div>
    
    </div>
    
    
    
    <form action="$script" method="post">
        <h2>Wrong Passwword!</h2>
        <p>Please continue to back to the main site by clicking the banner! </p>
        <input id="submitButton" type=submit name="created" value="Refresh">   
    </form>
</body>
</html>
TOP;
}

function successfulRegistration(){
     print <<<TOP
<html lang="en">

<head>

	<title>Quarantine Games</title>
	<meta charset="UTF-8">
	<meta name="description" content="A User Registration Page">
    <meta name="author" content="Uzair Saleem">
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">

</head>
<body>

    <div id="header">
            
    <div id="title">
        <a href="qgames-index.php" style="text-decoration:none"><h1>QUARANTINE GAMES</h1></a>
    </div>

    <div id="tabs">
            <button class="tablink" onclick="location.href = 'action.html';">Card Games</button>
            <button class="tablink" onclick="location.href = 'sports.html';">Sports</button>
            <button class="tablink" onclick="location.href = 'adventure.html';">Adventure</button>
            <button class="tablink" onclick="location.href = 'puzzle.html';">Puzzle</button>
            <button class="tablink" onclick="location.href = 'party.html';">Party</button>
            <button class="tablink" id="last-tab" onclick="location.href = 'strategy.html';">Strategy</button>
    </div>
    
    </div>
    <form>
    <h2>User Registration Sucessful! </h2>
    <p>Please continue to back to the main site by clicking the banner! </p>
    </form>
</body>
</html>
TOP;
}

function successfulLogIn(){
     print <<<TOP
<html lang="en">

<head>

	<title>Quarantine Games</title>
	<meta charset="UTF-8">
	<meta name="description" content="A User Registration Page">
    <meta name="author" content="Uzair Saleem">
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">

</head>
<body>

     <div id="header">

    <div id="title">
        <a href="qgames-index.php" style="text-decoration:none"><h1>QUARANTINE GAMES</h1></a>
    </div>

    <div id="tabs">
            <button class="tablink" onclick="location.href = 'action.html';">Card Games</button>
            <button class="tablink" onclick="location.href = 'sports.html';">Sports</button>
            <button class="tablink" onclick="location.href = 'adventure.html';">Adventure</button>
            <button class="tablink" onclick="location.href = 'puzzle.html';">Puzzle</button>
            <button class="tablink" onclick="location.href = 'party.html';">Party</button>
            <button class="tablink" id="last-tab" onclick="location.href = 'strategy.html';">Strategy</button>
    </div>
    
    </div>
    <form>
    <h2>User Log In Sucessful! </h2>
    <p>Please continue to back to the main site by clicking the banner! </p>
    </form>
</body>
</html>
TOP;
}



?>