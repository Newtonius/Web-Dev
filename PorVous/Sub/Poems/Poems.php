<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Your Poems</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <meta HTTP-EQUIV="Expires" CONTENT="-1">

        <link rel="shortcut icon" href="http://Porvous.com/GFX/siteGFX/icon_heart1.png">
        <link rel="stylesheet" href="poemStyle.css" type="text/css">

    </head>
    <body>
        <div id="navMenu">
            <div class="navSection">
                <p>Poems</p>
                <select name="tableOfContets" onchange="location = this.options[this.selectedIndex].value;">
                <?php
                     $title = array("Where we go", "Have a wonderful day","International women's day", "Magic 5", "Yearnful gift" 
    					,"My Daffodill","The Heidi of my Dreams","The Wait"
                        ,"Time's Running Out","A new morn by your side","When I look at you"
                        ,"Yonder life","Looking Ahead","Slow Waltz","Two-halves","An ode to a snowflake"
                        ,"Seashells and pebbles","Morning Dew","Sprouting Flower","Glory Night"
                        ,"5 Syllables","The Jump","Heidi's Flight","The Flower","Give unto me"
                        ,"The Cliff","Under the worldly sky","My Wonderfully Crazy- Woman","Our Secret Pt. 2"
                        ,"Yes","How I think of thee","A dance for two","We're all bananas","You are the music"
                        ,"It's a long way, but not with you");
                    for($i = 1; $i <= count($title); $i++):
                ?>
                    <option value="#p<?php echo $i ?>"><?php echo $title[$i-1]; ?></option>
                    <?php endfor; ?>
                </select>
                <h2 class="dedication">
                    Básně pro moje skvělá Heidi!
                </h2>
            </div>
        </div>

        <span class="anchor"></span>

        <div>
            <p id="p">
                Poke the nose to see how much I lurves meine Heidi!
            </p>
                <br/>
            <figure class="imgCont">
                <img id="pokeNoseImg" onclick="changeImage()" src="GFX/nose.jpg" alt="nose" />
            </figure>
                <br />
            <p id="comment"></p>
        </div>

        <!-- POEMS -->
        <?php include ($_SERVER['DOCUMENT_ROOT'].'/Sub/Poems/poemArray.php') ?>

        <script src="pokeNoseDynamics.js" type="text/javascript"></script>
    </body>
</html>
