registerButton = document.getElementById("submitButton")
resetButton = document.getElementById("resetButton")
registerButton.addEventListener("click", validateUserGeneration)
//resetButton.addEventListener("click", clearFields)

function validateUserGeneration(){
    var username = document.getElementById("username").value
    var password = document.getElementById("password").value
    var passrep = document.getElementById("pass_repeat").value
    if ((isNaN(username[0])) == false){
        alert("Invalid username or password");
        return false;
    }
    else if (username.length < 6 || username.length > 10){
        alert("Invalid username length invalid, make sure it's between 6 and 10 characters.");
        return false;
    }
    else if (password.length < 6 || password.length > 10){
        alert("Invalid password legnth invalid, make sure it's between 6 and 10 characters.");
        return false;
    }
    else if (password !== passrep){
        alert("Paswords do not match.");
        return false;
    }
    var isPassValid = checkIfAlphaNum(password)
    var isUserValid = checkIfAlphaNum(username)
    var isPassStrong = checkPassStr(password)
    if (isPassStrong){
        if (isUserValid){
            if (isPassValid){
                registerUser(username, password)
                alert("User registration complete!");
                return true;
            }
            else{
                alert("Do not include special characters in the password");
                return false;
            }
        }
        else{
            alert("Do not include special characters in the username");
            return false;
        }
        
    }
    else{
        alert("Password is not strong enough, include at least one upper case, lowercase and number");
        return false;
    }
    
    
}
//checks if the word is alphanumeric characters only
function checkIfAlphaNum(word){
    for (i = 0; i < word.length; i++){
        var letterToCheck = word.charCodeAt(i);
        if (letterToCheck < 48 || letterToCheck > 123 || (letterToCheck > 57 && letterToCheck < 65) || (letterToCheck > 90 && letterToCheck < 97 )){
            return false;
        } 
    }
    return true
}
//checks if the password is strong by having an upper, lower, and number
function checkPassStr(word){
    var upperLetter = false
    var lowerLetter = false
    var number = false
    for (i = 0; i < word.length; i++){
        var letterToCheck = word.charCodeAt(i);
        if (letterToCheck > 47 && letterToCheck < 58 ){
            number = true;
        }
        else if (letterToCheck > 64 && letterToCheck < 91){
            upperLetter = true;
        }
        else if (letterToCheck > 96 && letterToCheck < 123){
            lowerLetter = true;
        }
        if (number && upperLetter && lowerLetter) {
            return true
        }
    }
    return false
}