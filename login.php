<?php
session_start();
if (!($_POST['created'] == 'Submit')){
    createUser();
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
        <h2>Sign In/Up</h2>
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
                <td id="buttonRow"><input id="submitButton" type=submit name="created" value="Submit">
                    <input id="resetButton" type=reset  value="Clear"></td>
            </tr>
        </table>    
    </form>
</body>
</html>
TOP;

}


function checkUser(){
    $file = fopen("passwd.txt", "r");
    $username = $_POST["user"];
    $password = $_POST["pass"];
    //read the entire file and put it in an array
    $listOfUsers = array();
    while (!feof($file))
    {
        $line = fgets($file);
        $listOfUsers[] = $line;
    }
    
    $matchfound = false;
    for($i =0; $i < (count($listOfUsers) - 1); $i++){
        $userdata = preg_split('/:+/',$listOfUsers[$i]);
        //do regex check on each array and see if user is registerd
        if ($userdata[0] == $username){
            $matchfound = true;
            // set the cookie
            if (trim($userdata[1]) == trim($password)){
                setcookie("username", $username, time()+120, "/");
                $_SESSION['login'] = 'yes';
            }
            else{
                print 'Invalid Password! Refresh and try again!';
                print <<<HIDDENFORM
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

    <form action="$script" method="post" onsubmit="return validateUserGeneration()">
        <table>
            <tr>
                <td id="buttonRow"><input id="submitButton" type=submit name="created" value="Refresh">
            </tr>
        </table>    
    </form>
</body>
</html>
HIDDENFORM;
                break;
            }
        }
    }
    fclose($file);
    // if user is not registered then register them
    if ($matchfound == false){
        print <<<REGISTER
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

    <form action="$script" method="post" onsubmit="return validateUserGeneration()">
        <table>
            <h2>User Log In Failure!</h2>
            <p>Press the button below to try again!</p>
            <tr>
                <td id="buttonRow"><input id="submitButton" type=submit name="created" value="Refresh">
            </tr>
        </table>    
    </form>
</body>
</html>
REGISTER;
    
    }
    else{
        print <<<LOGIN
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

    <form action="database.php" method="post" onsubmit="return validateUserGeneration()">
        <table>
            <h2>User Log In Successful!</h2>
            <p>Continue to the database!</p>
            <tr>
                <td id="buttonRow"><input id="submitButton" type=submit name="created" value="Continue">
            </tr>
        </table>    
    </form>
</body>
</html>
LOGIN;
    
    }
}



?>