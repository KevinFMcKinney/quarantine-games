<?php
if (!isset($_POST['created'])){
    createUser();
}
else if(!isset($_COOKIE["username"])){
    print "User is logged in";
}
else{
    successfulRegistration();
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
        <a href="qgames-index.html" style="text-decoration:none"><h1>QUARANTINE GAMES</h1></a>
    </div>

    <div id="tabs">
        <button class="tablink" onclick="location.href = 'sample.html';">Action</button>
        <button class="tablink" onclick="location.href = 'sample.html';">Sports</button>
        <button class="tablink" onclick="location.href = 'sample.html';">Adventure</button>
        <button class="tablink" onclick="location.href = 'sample.html';">Puzzle</button>
        <button class="tablink" onclick="location.href = 'sample.html';">Party</button>
        <button class="tablink" id="last-tab" onclick="location.href = 'sample.html';">Strategy</button>
    </div>

    </div>

    <form action="$script" method="post" onsubmit="return validateUserGeneration()">
        <h2>Sign Up</h2>
        <table>
            <tr>
                <td id="words">Username:</td>
            </tr>
            <tr>
            <td><label><input id="username" name="user" type="text"></label></td>
            </tr>
            <tr>
                <td id="words">Password:</td>
            </tr>
            <tr>
                <td><label><input id="password" name="pass" type="password"></label></td>
            </tr>
            <tr>
                <td id="words">Repeat Password:</td>
            </tr>
            <tr>
                <td><label><input id="pass_repeat" name="repeat_pass" type="password"></label></td>
            </tr>
            <tr>
                <td id="buttonRow"><input id="submitButton" type=submit name="created" value="Submit">
                    <input id="resetButton" type=reset  value="Clear"></td>
            </tr>
        </table>    
    </form>
    
    <script src=submit.js></script>
</body>
</html>
TOP;
}

function successfulRegistration(){
    print <<<TOPTWO
    <p>Registartion successful</p>
TOPTWO;
    $file = fopen("registeredUsers.txt", "a");
    $username = $_POST["user"];
    $password = $_POST["pass"];
    fwrite($file, $username);
    fwrite($file, ':');
    fwrite($file, $password);
    setcookie("username", $username, time() + 360);
    fclose($file);
}




?>
