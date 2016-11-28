<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PorVous | Travel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <meta HTTP-EQUIV="Expires" CONTENT="-1">
        <link rel="shortcut icon" href="/GFX/siteGFX/icon_heart1.png" />
        <link rel="stylesheet" href="CSS/core.css" type="text/css" />
        <link rel="stylesheet" href="CSS/travel.css" type="text/css" />

    </head>
    <body>
        <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/header.php') ?>

                    <h1>A plethora of culture!</h1>
                    <div>
                        <p class="title">Welcome to Earth</p>
                        <center>
                            <iframe src='http://www.youtube.com/embed/uWXUWepSak4' class="video" frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen>
                            </iframe>
                            <br/>
                            <p class="footnote">-Learn more about <a href="https://playingforchange.com/" target="_blank">Playing For Change</a>!-</p>
                        </center>
                    </div>
                        <br/><br/>
                        <div>
                            <p class="title">
                                Listen to music From around the world! Can you handle all this culture?  
                                <img src='http://26.media.tumblr.com/tumblr_ltswn6XQcz1qm038ko1_500.gif' width='40' height='40' alt='Explosm.net' title='Cyanide And Happiness'/>
                            </p>

                            <!-- id="cultureNavBody -->
                            <div id="scroller">
                                <div class="innerScrollArea">
                                    <ul>
                                        <?php 

                                            $countryNames = array("America","Britain","Czech","Georgia","Germany","Greenland","Iceland",
                                                               "Netherlands","Russia","Sweden","Scotland");
                                            $countrySites = array("american","british","czech","georgian","german","greenlandic","icelandic",
                                                               "dutch","russian","swedish","scottish");
                                            $countryFlag = array("americanFlag.png","britishFlag.jpg","czechFlag.png","georgianFlag.png","germanFlag.png",
                                                "greenlandicFlag.png","icelandicFlag.png","dutchFlag.png","russianFlag.png","swedishFlag.jpg","scottishFlag.jpg");


                                            for ($i=0; $i < count($countryNames); $i++):

                                        ?>
                                        <li>
                                            <a href="Sub/Travel/cultureMusic/<?php echo $countrySites[$i]; ?>Music.html" target="iframe">
                                                <img src="GFX/travelGFX/flags/<?php echo $countryFlag[$i]; ?>" width="100" height="62" alt=""/>
                                                <br/>
                                                <?php echo $countryNames[$i]; ?>
                                            </a>
                                        </li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                            </div>
                                <div class="frameContainer">
                                    <iframe src="" name="iframe" id="frame"></iframe>
                                </div>
                        </div>
                        
        <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/footer.php') ?>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){
                var scroller = $('#scroller div.innerScrollArea');
                var scrollerContent = scroller.children('ul');
                scrollerContent.children().clone().appendTo(scrollerContent);
                var curX = 0;
                scrollerContent.children().each(function(){
                    var $this = $(this);
                    $this.css('left', curX);
                    curX += $this.outerWidth(true);
                });
                var fullW = curX / 2;
                var viewportW = scroller.width();

                // Manual Scroller
                // scroller.css('overflow-x', 'auto');

                // Scrolling speed management
                var controller = {curSpeed: 0, fullSpeed: 1};
                var $controller = $(controller);
                // When hovering over, takes 500ms to set speed of rotation to 0
                var tweenToNewSpeed = function(newSpeed, duration)
                {
                    if (duration === undefined)
                        duration = 1250;
                    $controller.stop(true).animate({curSpeed:newSpeed}, duration);
                };

                // Pause on hover
                scroller.hover(function(){
                    tweenToNewSpeed(0);
                }, function(){
                    tweenToNewSpeed(controller.fullSpeed); // When hovering out, set speed to normal
                });

                // Scrolling management; start the automatical scrolling
                var doScroll = function()
                {
                    var curX = scroller.scrollLeft();
                    var newX = curX + controller.curSpeed;
                    if (newX > fullW*2 - viewportW)
                        newX -= fullW;
                    scroller.scrollLeft(newX);
                };
                setInterval(doScroll, 20);
                tweenToNewSpeed(controller.fullSpeed);
            });
        </script>
    </body>
</html>





                            <!-- WORD OF THE DAY
                            <div id="widget" style="width:540px;height:450px;margin:0 auto;">
                                <iframe src="http://www.innovativelanguage.com/widgets/wotd/embed.php?language=Czech&type=large&bg=%23FFFFFF&content=%23000&header=%232E5AAA&highlight=%23F9F9FA&opacity=1&scrollbg=%2300CAED&sound=%2300ACED&text=%2300ACED&quiz=N" width="540" height="450" frameborder="0" scrolling="no">
                                </iframe>
                                <div style="font:bold 9px/16px Verdana; padding:0; height:16px;">
                                    <div style="float:left; margin:0;">
                                        <a href="http://www.czechclass101.com/czech-phrases/" target="_parent" title="Get Czech Phrases Widget" style="font-family: Helvetica, Arial, sans-serif;font-size: 11px;color: #00ACED;" rel="nofollow">
                                            Get Czech Phrases Widget
                                        </a>
                                    </div>
                                    <div style="float:right; margin:0;">
                                        <a href="http://www.czechclass101.com" target="_parent" title="Learn Czech" style="font-family: Helvetica, Arial, sans-serif;font-size: 11px;color: #00ACED;" rel="nofollow">
                                            Learn Czech
                                        </a>
                                    </div>
                                </div>
                            </div>
                            -->