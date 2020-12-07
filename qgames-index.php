<!DOCTYPE html>

<html lang="en">

<head>

	<title>Quarantine Game</title>
	<meta charset="UTF-8">
	<meta name="description" content="Website about games that can be played during quarantine.">
    <meta name="author" content="Kevin McKinney">
    <link rel="stylesheet" href="qgames-index.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	
</head>

<div id="container">

    <div id="header">
        
        <div id="title">
            <a href="qgames-index.html" style="text-decoration:none"><h1>QUARANTINE GAMES</h1></a>
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
    <p><?php print "<a id='login' href = 'login.php'>Log In/Register</a>"; ?></p>

    <div id="left-nav">


    <div id="content">

        <div id="games">

            <h3 id="titlegame"></h3>

            <img id="gimage">
    
            <p id="gameCaption"></p>

            <h3>Gameplay:</h3>

            <div id="gameImg">
                <iframe id="vid" width="500px" height="281px"></iframe>
            </div>

            <script>
                //var img=document.createElement("img");img.src="Images/3-5-8.png";img.style.height = '170px'; var src=document.getElementById("gameImg");src.appendChild(img);
            </script>
            <script>
                //var imageArray = new Array();imageArray[0] = "Images/3-5-8.png"; imageArray[1] = "Images/amongUs.jpg";imageArray[2] = "Images/RDR2.jpg";imageArray[3]="Images/stardew.jpg";imageArray[4]="Images/rocketleague.jpg";
                sources = ["https://www.youtube.com/embed/UXAu5dtd_uY","https://www.youtube.com/embed/E9bdMxOpm88","https://www.youtube.com/embed/0d-U2QL2Qvc","https://www.youtube.com/embed/KKGhsUJd1RE","https://www.youtube.com/embed/xgg03Z_xOoE"]

                titles = ["Featured Game: Solitaire", "Featured Game: Among Us", "Featured Game: Red Dead Redemption 2", "Featured Game: Stardew Valley", "Featured Game: Rocket League"]

                images =["Images/3-5-8.png","Images/amongUs.jpg","Images/RDR2.jpg","Images/stardew.jpg","Images/rocketleague.jpg"]

                captionArray = new Array()
                captionArray[0]='Solitaire is any tabletop game which one can play by oneself, usually with cards, but also with dominoes. The term "solitaire" is also used for single-player games of concentration and skill using a set layout tiles, pegs or stones. These games include peg solitaire and mahjong solitaire. Most solitaire games function as a puzzle which, due to a different starting position, may (or may not) be solved in a different fashion each time.'
                captionArray[1]="Among Us is an online multiplayer social deduction game developed and published by American game studio InnerSloth and released on June 15, 2018. The game takes place in a space-themed setting, in which players each take on one of two roles, most being Crewmates, and a predetermined number being Impostors. The goal of the Crewmates is to identify the Impostors, eliminate them, and complete tasks around the map; the Impostors' goal is to covertly sabotage and kill the Crewmates before they complete all of their tasks. Players suspected to be Impostors may be eliminated via a plurality vote, which any player may initiate at any time. Crewmates win if all Impostors are eliminated or all tasks are completed whereas Imposters win if there is an equal number of Impostors and Crewmates, or if a critical sabotage goes unresolved. <em>(Source: <a href='https://en.wikipedia.org/wiki/Among_Us'>wikipedia.org</a>)</em>"
                captionArray[2]="Red Dead Redemption 2 (stylized as Red Dead Redemption II) is a 2018 action-adventure game developed and published by Rockstar Games. The game is the third entry in the Red Dead series and is a prequel to the 2010 game Red Dead Redemption. The game is presented through both first and third-person perspectives, and the player may freely roam in its interactive open world. Gameplay elements include shootouts, heists, hunting, horseback riding, interacting with non-player characters, and maintaining the character's honor rating through moral choices and deeds. A bounty system similar to the 'wanted' system from the Grand Theft Auto franchise governs the response of law enforcement and bounty hunters to crimes committed by the player. <em>(Source: <a href='https://en.wikipedia.org/wiki/Red_Dead_Redemption_2'>wikipedia.org</a>)</em>"
                captionArray[3]="Stardew Valley is a simulation role-playing video game developed by Eric 'ConcernedApe' Barone. In Stardew Valley, players take the role of a character who takes over his or her deceased grandfather's dilapidated farm in a place known as Stardew Valley. The game is open-ended, allowing players to take on several activities such as growing crops, raising livestock, crafting goods, mining for ores, selling produce, and socializing with the townsfolk, including marriage and having children. It also allows up to three other players to play together online. <em>(Source: <a href='https://en.wikipedia.org/wiki/Stardew_Valley'>wikipedia.org</a>)</em>"
                captionArray[4]="Rocket League is a vehicular soccer video game developed and published by Psyonix. Described as 'soccer, but with rocket-powered cars', Rocket League has up to eight players assigned to each of the two teams, using rocket-powered vehicles to hit a ball into their opponent's goal and score points over the course of a match. The game includes single-player and multiplayer modes which can be played both locally and online, including cross-platform play between all versions. <em>(Source: <a href='https://en.wikipedia.org/wiki/Rocket_League'>wikipedia.org</a>)</em>"
                function randoGame() {
                    number = Math.floor((Math.random())*(5))
                    //img.src=imageArray[number]
                    document.getElementById("titlegame").innerHTML = titles[number]
                    document.getElementById("gameCaption").innerHTML = captionArray[number]
                    document.getElementById("vid").src = sources[number]
                    document.getElementById("gimage").src = images[number]
                }
                randoGame()

            </script>
        </div>

        <div id="purpose">
            <h2>The Purpose</h2>
            <p>During the pandemic, it's hard to socialize and not feel isolated. So our purpose was to showcase easy to access games on the internet for you to play with friends and family to connect.</p>
            <a href="contact.html">Contact Us</a>
        </div>

    </div>
    

</div>
</div>

</html>
