<!DOCTYPE html>
<html>
<head>
    <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <meta HTTP-EQUIV="Expires" CONTENT="-1">
		
        <link rel="stylesheet" href="http://Porvous.com/CSS/core.css" type="text/css">
        <link rel="stylesheet" href="http://Porvous.com/CSS/porvousDesign.css" type="text/css">
        <link rel="stylesheet" href="quizDesign.css" type="text/css">
        <link rel="shortcut icon" href="http://Porvous.com/GFX/siteGFX/icon_heart1.png">
        <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>

</style>
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
                            Misc Science Quiz 1
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h3 class="quest">Q1) Which sphere is not one of Earth's 4 ecosystem spheres </h3><br>
                            <button class="button" id="q1Button1" onclick="question1a1()">Hydrosphere</button><br>
                            <button class="button" id="q1Button2" onclick="question1a2()">Lithosphere</button><br>
                            <button class="button" id="q1Button3" onclick="question1a3()">Ionosphere</button><br>
                            <button class="button" id="q1Button4" onclick="question1a4()">Biosphere</button><br>
                            <button class="button" id="q1Button5" onclick="question1a5()">Atmosphere</button><br>
                            <p id="q1AR"></p>

                            <br><br>

                            <h3 class="quest">Q2) Finish the chemical formula for photosynthesis: 6(CO_) + _(__O) ==> C_H_0_ + 6(O_)</h3><br>

                            <button class="button" id="q2Button1" onclick="question2a1()">6(CO3) + 4(H2O) ==> C8H16O8 + 6(O3)</button><br>
                            <button class="button" id="q2Button2" onclick="question2a2()">6(CO2) + 6(H2O) ==> C6H12O6 + 6(O2)</button><br>
                            <button class="button" id="q2Button3" onclick="question2a3()">6(CO) + 5(C2O) ==> C4H8O4 + 6(O2)</button><br>
                            <button class="button" id="q2Button4" onclick="question2a4()">6(CO2) + 6(H2O) ==> C6H12O6 + 6(O3)</button><br>
                            <p id="q2AR"></p>

                            <br><br>

                            <h3 class="quest">Q3) Identify the following Compound: H2S03</h3><br>
                            <button class="button" id="q3Button1" onclick="question3a1()">Hydrogen Sulfate</button><br>
                            <button class="button" id="q3Button2" onclick="question3a2()">Sulfuric Acid </button><br>
                            <button class="button" id="q3Button3" onclick="question3a3()">Sulfurous Acid</button><br>
                            <button class="button" id="q3Button4" onclick="question3a4()">Dihydrogen sulfur oxate</button><br>
                            <p id="q3AR"></p>

                            <br><br>

                            <h3 class="quest">Q4) Which explains a decomposed plant's process of returning Nitrogen back into the atmosphere?</h3><br>
                            <button class="button" id="q4Button1" onclick="question4a1()">Denitrifying bacteria use nitrate reductase enzyme 
                                in an anaerobic environment to turn Nitrogen into gaseous form
                            </button><br>
                            <button class="button" id="q4Button2" onclick="question4a2()">Nitrogen fixing Bacteria absorb and release Nitrogen in aerobic and anaerobic environments to moderate Nitrogen and ammonium levels
                            </button><br>
                            <button class="button" id="q4Button3" onclick="question4a3()">Nitrogen is released as a natural cellular respiration process to preserve cell material; longevity</button><br>
                            <button class="button" id="q4Button4" onclick="question4a4()">Nitrogen tastes bad and plants just hate it</button><br>
                            <p id="q4AR"></p>

                            <br><br>

                            <h3 class="quest">Q5) Which main focus cause scientists to focus on Carbon Dioxide more than Methane and Nitrogen when looking at greenhouse gasses?</h3><br>
                            <button class="button" id="q5Button1" onclick="question5a1()">It retains more heat than Methane and nitrogen</button><br>
                            <button class="button" id="q5Button2" onclick="question5a2()">Methane and Nitrogen are less abundant</button><br>
                            <button class="button" id="q5Button3" onclick="question5a3()">Carbon Dioxide buildup is larger and has proven through examples in permafrost to have caused rises in Earth temperature throughout History</button><br>
                            <button class="button" id="q5Button4" onclick="question5a4()">Carbon Dioxide permeates the Earth's atmosphere at more parts per billion and is harder to get rid of</button><br>
                            <p id="q5AR"></p>

                            <br><br>

                            <h3 class="quest">Q6) Name the Earth's four major carbon stores?</h3><br>
                            <button class="button" id="q6Button1" onclick="question6a1()">Magnetosphere, Oceans, secluded ecosystems, deserts</button><br>
                            <button class="button" id="q6Button2" onclick="question6a2()">Atmosphere, Oceans, Terrestrial ecosystems, and the Earths Crust</button><br>
                            <button class="button" id="q6Button3" onclick="question6a3()">Rivers, Amazon, Algae, Soil</button><br>
                            <button class="button" id="q6Button4" onclick="question6a4()">Exxon, BP, Mobil, Texaco</button><br>
                            <p id="q6AR"></p>

                            <br><br>

                            <h3 class="quest">Q7) What naturally occurring chemicals damage the ozone layers?</h3><br>
                            <button class="button" id="q7Button1" onclick="question7a1()">Methane (CH4), Propane (C3H8), Bromine (Br), Carbon Monoxide (CO)</button><br>
                            <button class="button" id="q7Button2" onclick="question7a2()">Mercury (Hg), Phosphate (PO4), Dihydrogen monooxide, chlorofluorocarbon (C Cl3 F)</button><br>
                            <button class="button" id="q7Button3" onclick="question7a3()">Fluoride (F), Radon (Rn), Carbon (C), Argon (Ar)</button><br>
                            <button class="button" id="q7Button4" onclick="question7a4()">Chlorine (Cl), Bromine (Br), Nitric Oxide (NO), Nitrous Oxide (N2O)</button><br>
                            <p id="q7AR"></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/footer.php') ?>
<script src="Javascript/MiscScienceQuizOneScript.js" type="text/javascript"></script>
</body>
</html>