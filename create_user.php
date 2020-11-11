<?php
if (!isset($_POST['created'])){
    createUser();
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
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="$script" method="post" onsubmit="return validateUserGeneration()">
        <table>
            <tr>
                <td id="words">Username</td>
            </tr>
            <tr>
            <td><label><input id="username" name="user" type="text"></label></td>
            </tr>
            <tr>
                <td id="words">Password:</td>
            </tr>
            <tr>
                <td><label><input id="password" name="pass" type="text"></label></td>
            </tr>
            <tr>
                <td id="words">Repeat Password:</td>
            </tr>
            <tr>
                <td><label><input id="pass_repeat" name="repeat_pass" type="text"></label></td>
            </tr>
            <tr>
                <td id="buttonRow"><input id="submitButton" type=submit name="created" value="Register">
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
    fwrite($file, ',');
    fwrite($file, $password);
    fclose($file);
}




?>
