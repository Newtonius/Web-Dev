<!DOCTYPE html>
<html>
<head>
    <title>First Aid Quiz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <meta HTTP-EQUIV="Expires" CONTENT="-1">
		
		<link rel="stylesheet" href="http://Porvous.com/CSS/core.css" type="text/css">
        <link rel="stylesheet" href="http://Porvous.com/CSS/porvousDesign.css" type="text/css">
        <link rel="stylesheet" href="quizDesign.css" type="text/css">
        <link rel="shortcut icon" href="http://Porvous.com/GFX/siteGFX/icon_heart1.png">
        <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/header.php') ?>
    <div id="foreground">
        <br><br><br>
        <div class="quizSector">
            <table>
                <thead>
                    <tr>
                        <th>
                            <span style="color: #FF0000;">First</span> 
                            <span style="color: #ffffff;">Aid</span> 
                            Quiz
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h3 class="quest">Q1) If the injury inflicted is a 'deep bite', 
                                the area of treatment is under which category?</h3><br>
                            <button class="button" id="q1Button1" onclick="question1a1()">Epidermal abrasion</button><br>
                            <button class="button" id="q1Button2" onclick="question1a2()">Category 1 Skin Tear</button><br>
                            <button class="button" id="q1Button3" onclick="question1a3()">Puncture wound</button><br>
                            <button class="button" id="q1Button4" onclick="question1a4()">Mild Rabies</button>
							<p id="q1AR"></p>

                            <br/><br/>

                            <h3 class="quest">Q2) What type of anti-biotic should you apply to an open wound to prevent further infection?</h3><br/>
                            <button class="button" id="q2Button1" onclick="question2a1()">Windex</button><br/>
                            <button class="button" id="q2Button2" onclick="question2a2()">Bacitracin</button><br/>
                            <button class="button" id="q2Button3" onclick="question2a3()">Amikacin</button><br/>
                            <button class="button" id="q2Button4" onclick="question2a4()">Neosporin</button>
							<p id="q2AR"></p>

                            <br/><br/>

                            <h3 class="quest">3) Which list is best used to determine a broken bone?</h3><br/>
                            <button class="button" id="q3Button1" onclick="question3a1()">Bruising, Swelling, Deformity, Pain</button><br/>
                            <button class="button" id="q3Button2" onclick="question3a2()">Unconscious, Breathing Issues, Pain</button><br/>
                            <button class="button" id="q3Button3" onclick="question3a3()">Jubilation, Arousal, Playful flailing</button><br/>
                            <button class="button" id="q3Button4" onclick="question3a4()">Immobile, Excessive Bleeding, Fatigue</button>
							<p id="q3AR"></p>
							
                            <br/><br/>

                            <h3 class="quest">Q4) Who is too awesome und sexy?</h3><br/>
                            <button class="button" id="q4Button1" onclick="question4a1()">Robert</button><br/>
                            <button class="button" id="q4Button2" onclick="question4a2()">Heidi</button><br/>
                            <button class="button" id="q4Button3" onclick="question4a3()">Robert</button><br/>
                            <button class="button" id="q4Button4" onclick="question4a4()">Heidi</button>
                            <p id="q4AR"></p>

                            <br/><br/>

                            <h3 class="quest">Q5) What is a bruise and how does one treat it?</h3><br/>
                            <button class="button" id="q5Button1" onclick="question5a1()">Death of Epithelial tissue</button><br/>
                            <button class="button" id="q5Button2" onclick="question5a2()">Pigment Mutation</button><br/>
                            <button class="button" id="q5Button3" onclick="question5a3()">Contusion of blood vessels</button><br/>
                            <button class="button" id="q5Button4" onclick="question5a4()">Skin that's becoming part grape</button>
							<p id="q5AR"></p>
							
                            <p>- And how do you treat this? -</p>
                            <button class="button" id="q5Button5" onclick="question5a5()">Leave alone until normally heals</button><br/>
                            <button class="button" id="q5Button6" onclick="question5a6()">Ice Pack on bruise</button><br/>
                            <button class="button" id="q5Button7" onclick="question5a7()">Plant Extracts in gel form</button><br/>
                            <button class="button" id="q5Button8" onclick="question5a8()">Ice Cream and hugs</button>
                            <p id="q5AR2"></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/footer.php') ?>
    <script src="Javascript/FirstAidQuizScript.js" type="text/javascript"></script>
</body>
</html>