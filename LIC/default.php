<!--  THINGS TO DO:  

- Have navbar appear at the topbar when scroll
- When hover over cuts/shaves have sample images appear
- FIX BACKGROUND

-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LIC Tonsorial</title>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta HTTP-EQUIV="Pragma" CONTENT="no-cache" />
        <meta HTTP-EQUIV="Expires" CONTENT="-1" />

        <!-- meta tags for search engine analytics -->
        <meta name="description" content="We're a family run barbershop based in Long Island city. We give cuts, shaves, trims, even a hot towel facial to all clients, young and old." />

        <!-- CUSTOM LIBRARIES -->
        <link rel="shortcut icon" href="GFX/icon.png" />
        <link rel="stylesheet" href="core.css" type="text/css" />
        <link rel="stylesheet" href="nav.css" type="text/css" />
        <link rel="stylesheet" href="header.css" type="text/css" />
        <link rel="stylesheet" href="content.css" type="text/css" />
        
        <!-- BOOTSTRAP -->
            <!-- BASICS  -->
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <!-- IMAGE GALLERY -->
            <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
            <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
        
        
        <!-- FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />
        <link href='https://fonts.googleapis.com/css?family=Stoke' rel='stylesheet' type='text/css' />
        <link href='https://fonts.googleapis.com/css?family=IM+Fell+French+Canon:400italic' rel='stylesheet' type='text/css' />
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400italic' rel='stylesheet' type='text/css' />
        
        <style>
        </style>
    </head>
    <body>
        
        <!-- SIMPLE BACKGROUND -->
        <figure class="background">
            <img src="GFX/bg.jpg" alt="" />
        </figure>
        
        <!-- THREE PART BACKGROUND 
        <div class="bgWrapper">
            <div class="bgChild"></div>
            
            <div class="bgChild">
                <img class="bgImg" src="GFX/bg.jpg" alt="" />
            </div>
            
            <div class="bgChild"></div>
        </div>
        -->
        
        <!-- ENTIRE PAGE WRAPPER -->
        <div id="wrapper">
            
            <!-- TOPBAR NAV-->
            <div id="top_bar">
                
                <!-- TITLE -->
                <a href="#top">
                    <p class="titleLogo">
                        <span style="color: #fff;">L.I.C. <img src="GFX/razorHeader.png" width="50" height="43"/> Tonsorial</span>
                    </p></a>
                
                <!-- TOPBAR NAVBAR 
                <nav id="nav">
                    <ul>
                        <li><a href="#about">About us</a></li><li>
                        <a href="#info">Cuts</a></li><li>
                        <a href="#photos">Gallery</a></li>
                    </ul>
                </nav>
                -->
            </div>
            
            
            <!-- HEADER [LOGO] -->
            <div id="header">
                
                <!-- LOGO-->
                <span class="anchor" id="topAnchor"></span>
                <center> 
                    <div id="logo_Container">
                        <img src="GFX/LICLogo.png" id="logoFade" class="logo" alt=""/>
                        <!-- <p>"Let us L.I.C your Tonsorials ;)"</p> -->
                    </div>
                </center>
                <br />
                <!-- BOOK APPOINTMENT BUTTON -->
                <p class="bookAppt" >
                    <a href="https://lictonsorial.resurva.com/book" target="_blank">
                        <span style="color: #fff;">~ Book appointment ~</span>
                    </a>
                 </p>
                 <br />
                 <!-- HEADER NAV -->
                 <nav id="nav">
                     <ul>
                         <li>
                            <a href="#aboutSection">
                                ~ Contact ~
                            </a></li><li>
                            <a href="#info">
                               ~ Services ~
                            </a></li><li>
                            <a href="#photos">
                                ~ Gallery ~
                            </a></li>
                     </ul>
                 </nav>
            </div>
                 
                 
            <!-- CONTENT -->
            <div id="contentBackground">
                <div id="content">

                    <!--  ABOUT US SECTION  -->
                    <span class="anchor" id="aboutSection"></span>
                    <section id="about" class="sections">
                        <article class="article">
                            
                            <h3>About us</h3>
                            <div id="aboutWrapper">
                                <div class="aboutContent">
                                    <p>
                                        I remember those old-fashioned barber shops,
                                        the ones where everyone was welcome.
                                        You could hear stories about people who made it to the top,
                                        never just a place to get your haircut, rather, filled with conversation 
                                        and good memories. I spent most of my childhood in one.
                                        When life threw-out the day would go wrong,
                                        the barber shop was a place that made me feel strong,
                                        a place where everyone shares an experience. 
                                        It's places like this, I love the most.
                                    </p>
                                    <!-- SOCDIAL ICONS -->
                                    <div class="socialIcons">
                                        <a href="https://www.facebook.com/longislandcitybarber/timeline" target="_blank">
                                            <img src="GFX/fb.png" width="38" height="38" alt="" />
                                        </a>
                                        <a href="https://twitter.com/QueensFinests" target="_blank">
                                            <img src="GFX/twit.png" width="38" height="38" alt="" />
                                        </a>
                                        <a href="https://www.instagram.com/l.i.ctonsorial2014/?ref=badge" target="_blank">
                                            <img src="GFX/ins.png" width="38" height="38" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <!-- ABOUT IMAGE -->
                                <div class="aboutContent">
                                    <img src="GFX/aboutUs.jpg" align="middle" alt="" />
                                </div>
                                <!-- CONTACT INFO -->
                                <div class="aboutContent">
                                    <a target="_blank" href="https://www.google.com/maps/place/41-10+34th+Ave,+Astoria,+NY+11101/@40.7561242,-73.9218469,17z/data=!3m1!4b1!4m2!3m1!1s0x89c25f3b4a5624cf:0xe8ca6027e1d2c001">
                                        <p><span style="color: #fff;">41-10 34th Ave<br /> Long Island City NY, 11101</span></p></a>
                                    <p>347-654-6386</p>
                                        <p class="direction">
                                            <a target="_blank" href="https://www.google.com/maps/place/41-10+34th+Ave,+Astoria,+NY+11101/@40.7561242,-73.9218469,17z/data=!3m1!4b1!4m2!3m1!1s0x89c25f3b4a5624cf:0xe8ca6027e1d2c001">
                                                Map
                                            </a>
                                        </p>
                                    
                                    <h3>Hours</h3>
                                    <p>
                                        Mon 10am-8pm<br />
                                        Tue 10am-8pm<br />
                                        Wed 10am-8pm<br />
                                        Thu 10am-8pm<br />
                                        Fri 10am-8pm<br />
                                        Sat 10am-8pm<br />
                                        Sun 12pm-5pm
                                    </p>
                                </div>
                                
                            </div>
                        </article>
                    </section>

                    <!--  SERVICES SECTION  -->
                    <span class="anchor" id="info"></span>
                    <section id="infoSection" class="sections">
                        <article>
                            <div class="cutWrapper">
                                <!-- CUTS LIST -->
                                <h4>~ Cuts ~</h4>
                                    <p>Classic Cut<br /><strong>$</strong>25</p>
                                    
                                    <p>Gentleman's Buzz<br /><strong>$</strong>17</p>
                                    
                                    <p>Kids Haircut<br /><strong>$</strong>15</p>
                                    
                                    <p>Seniors Haircut<br /><strong>$</strong>10</p>
                                    
                                <!-- SHAVE LIST -->    
                                <h4>~ Shaves ~</h4>
                                    <p>Cut + Shave/Beard trim<br /><strong>$</strong>33</p>

                                    <p>Wet Shave/Beard trim<br /><strong>$</strong>15</p>

                                    <p>Traditional wet shave<br /><strong>$</strong>18</p>
                                    
                                    <p style="font-size: 9pt;">*Time of service may vary from 30min - 1hr</p>
                            </div>
                            
                            <div class="layriteCont">
                                <p style="font-family: Calibri;">* We sell <i>Layrite</i> © products *</p>                          
                                <img class="layritePics" src="GFX/Layrite/deluxe_trans.png" alt="Layrite" title="Layrite Deluxe" width="125" height="125" />
                                <img class="layritePics" src="GFX/Layrite/lgSpray_trans.png" alt="Layrite" title="Layrite Spray" width="75" height="175" />
                                <img class="layritePics" src="GFX/Layrite/superhold_trans.png" alt="Layrite" title="Layrite Superhold" width="125" height="125" />
                            </div>
                        </article>
                    </section>

                    <!--  PHOTO GALLERY SECTION  -->
                    <span class="anchor" id="photos"></span>
                    <section id="photoSection" class="sections">
                        <article class="article">
                            <h3><a href="http://lictonsorial.com/gallery.php" target="_blank" style="color: #ffffff; text-decoration: none;">
                                    Visit our Gallery!</a></h3>

                            <!-- The Bootstrap Image Gallery lightbox [DON'T MODIFY] -->
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <!-- The container for the modal slides -->
                                <div class="slides"></div>
                                <!-- Controls for the borderless lightbox -->
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                                <!-- The modal dialog, which will be used to wrap the lightbox content -->
                                <div class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title"></h4>
                                            </div>
                                            <div class="modal-body next"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left prev">
                                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                                    Previous
                                                </button>
                                                <button type="button" class="btn btn-primary next">
                                                    Next
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  GALLERY  IMAGES  -->
                            <div id="links" class="galleryContainer">
                                <div class="img-container"><a href="GFX/gallery/img1.jpg" data-gallery>
                                        <figure><img src="GFX/gallery/img1.jpg" alt="" title="" class="img img-responsive" /></figure>
                                    </a></div>
                                <div class="img-container"><a href="GFX/gallery/img2.jpg" data-gallery>
                                        <figure><img src="GFX/gallery/img2.jpg" alt="" title="" class="img img-responsive" /></figure>
                                    </a></div>
                                <div class="img-container"><a href="GFX/gallery/img3.jpg" data-gallery>
                                        <figure><img src="GFX/gallery/img3.jpg" alt="" title="" class="img img-responsive" /></figure>
                                    </a></div>
                            </div>
                        </article>
                    </section>   
                </div>
            </div>
            
            <!-- FOOTER -->
            <footer id="footer">
                
            </footer>
        </div>
        
        <!-- IMAGE GALLERY SCRIPT LIBRARIES -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <script src="js/bootstrap-image-gallery.min.js"></script>
        <!--
        <script>
            window.onload = function() {
                setTimeout( function() {
                   document.getElementById("logoFade").style.opacity = "100";
                },2000);
            };
        </script>
        -->
    </body>
</html>