<!DOCTYPE html>
<html lang="en">
<head>
    <title>Merry Christmas Schmetterling!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <meta HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="http://Porvous.com/GFX/siteGFX/icon_heart1.png">
    
    <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
        @import url(https://fonts.googleapis.com/css?family=Chewy);
        * {
            margin: 0;
            padding: 0;
            overflow-x: no-content;
        }
        
        .background {
            width: 100vw;
            height: 100vh;
            position: fixed;
            z-index: -25;
        }
        .background img {
            width: 100vw;
            height: 100vh;
        }
        .wrapper {
            padding: 50px;
            background:rgba(0,0,0,0);
            height: 100vh;
            width: 100vw;
        }
        h1, h2 {
            font-family: 'Montserrat', sans-serif;
        }
        h1 {
            font-size: 32pt;
            font-weight: 700;
            color: #1fb927;
            text-shadow: 0px 0px 5px #ffffff;
        }
        h2 {
            font-size: 16pt;
        }
        h2, p {
            color: #ffffff;
        }
        p {
            font-size: 14pt;
        }
        .inputDiv {
            background: #ffffff;
            width: 160px;
            opacity:0.75;
            margin: 10px;
            padding: 20px;
            transition: all 0.5s;
        }
        .inputDiv:hover {
            opacity: 1.0;
        }
        .textBox {
            margin: auto;
            background: rgba(0,0,0,0);
            border-left: 0;
            border-right: 0;
            border-top: 0;
            border-bottom: 3px solid rgb(172,70,181);
            color:rgb(172,70,181);
            font-size: 15pt;
            text-align: center;
            width: 150px;
            font-weight: bold;
            font-family: 'Chewy', cursive;
        }
        .textBox:focus {
            outline: 0;
        }
        
        .createPoem, .poemField {
        }
        .createPoem {
            width: 150px;
            height: 65px;
            font-size: 14pt;
            border-left: 0;
            border-top: 0;
            border-right: 3px solid rgb(162,65,169);
            border-bottom: 3px solid rgb(162,65,169);
            background:rgb(172,70,181);
            color: #ffffff;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
            margin: 25px;
            border-radius: 0;
        }
        .createPoem:hover {
            background:rgb(162,65,169);
        }
        .poemField {
            border:0;
            height: 2500px;
            width: 700px;
            float: left;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="background">
        <img src="img2.jpg" width="auto" height="auto" alt=""/>
    </div>
        
    <div class="wrapper">   
        
        <div class="title">
            <h1>Merry Christmas Schmetterling!</h1>
        </div>
        <p>:* ^.^</p>
<br />

        <div>
            <h2><em>Fill in the blank spaces for maximum enjoyment (the goofier, the better ;p)</em></h2>
            <br /><br />
            
            <div style="width:50vw;">
                <form action="poem.php" target="poemFrame">
            <?php
            
                $madlibs = array("occupation","emotion","animal","goofy-name","odd-food","verb ending in -ing","animal",
                    "trait","odd-noun","whacky emotion","odd-verb","emotion","adjective");
            
                for($i = 0; $i < count($madlibs); $i++):
            ?>
                <div class="inputDiv">
                    <input name="inp<?php echo $i ?>" class="textBox" type="text" placeholder="">
                    <p style="font-size: 12pt; color:rgb(172,70,181); text-align: center; font-family: 'Montserrat', sans-serif;">
                        <?php echo $madlibs[$i]; ?>
                    </p>
                </div>
                    <?php endfor; ?>
                    
                    <input class="createPoem" type="submit" value="Create Story!">
                </form>
            </div>
            
            <br /><br />
        </div>
        
        <div>
            <iframe name="poemFrame" class="poemField"></iframe>
        </div>
        
    </div>
</body>
</html>