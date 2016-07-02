<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PorVous | Gallery</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <meta HTTP-EQUIV="Expires" CONTENT="-1">
        <link rel="stylesheet" href="CSS/core.css" type="text/css" />
        <link rel="stylesheet" href="CSS/art.css" type="text/css" />
        <link rel="shortcut icon" href="GFX/siteGFX/icon_heart1.png" />
        <style type="text/css">
            <?php 
                $a = rand(1,11);
                $b = rand(1,12);
            ?>
            #psGallery {
                background: url("/GFX/artGFX/Icons/psGalleryIcons/<?php echo $a ?>.jpg") center no-repeat;
                background-size: cover;
                -moz-background-size: cover;
                -webkit-background-size: cover;
            } 

            #heidiGallery  {
                background: url("/GFX/artGFX/Icons/heidiGalleryIcons/<?php echo $b ?>.jpg") center no-repeat;
                background-size: cover;
                -moz-background-size: cover;
                -webkit-background-size: cover;
            }
        </style>

    </head>

    <body>
        <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/header.php') ?>

                <div class="homeBox">
                    <p>
                        Welcome to our gallery, if you can imagine it, it's probably in here somewhere ;) 
                    </p>
                </div>

                <br/> 
    			
                <article>
    				<h1>Heidi's Gallery ;)</h1>
                    <div id="heidiGallery">
                        <a href="/Sub/Art/heidiGallery.php" target="_self">
                            <p class="imgTextOverlay">
                                Das gut stuff
                            </p>
                        </a>
                    </div>
                </article>
    			
                <article>
                    <h1>Photoshop Gallery</h1>
                    <div id="psGallery">
                        <a href="/Sub/Art/photoshopGallery.php" target="_self">
                            <p class="imgTextOverlay">
                                The ugly truth
                            </p>
                        </a>
                    </div>
                </article>
                <br/>
                
        <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/footer.php') ?>

    </body>
</html>
