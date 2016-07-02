<!DOCTYPE html>
<html>
<head>
    
    <title>Photoshop Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <meta HTTP-EQUIV="Expires" CONTENT="-1">
    
    <link rel="shortcut icon" href="http://Porvous.com/GFX/siteGFX/icon_heart1.png">
    
    <!-- BOOTSTRAP -->
        <!-- BASICS  -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- IMAGE GALLERY -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    
<style>
    .testSection {
        width: 100vw;
        height: auto;
    }
    .testFigure {
        float: left;
        margin: auto;
        height: 250px;
        width: 250px;
    }
    .testImg {
        width: 100%;
        height: 100%;
    }
</style>

</head>
<body>
    <div class="background">
        <img src="http://Porvous.com/GFX/siteGFX/galaxy.jpg" alt="" />
    </div>
    
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/header.php') ?>
    
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

        <div class="img-container"><a href="../../GFX/artGFX/myPhotoshop/1.jpg" data-gallery>
                <figure><img src="../../GFX/artGFX/myPhotoshop/1.jpg" alt="" title="" class="img img-responsive" /></figure>
            </a></div>
        <div class="img-container"><a href="../../GFX/artGFX/myPhotoshop/1.jpg" data-gallery>
                <figure><img src="../../GFX/artGFX/myPhotoshop/1.jpg" alt="" title="" class="img img-responsive" /></figure>
            </a></div>
        <div class="img-container"><a href="../../GFX/artGFX/myPhotoshop/1.jpg" data-gallery>
                <figure><img src="../../GFX/artGFX/myPhotoshop/1.jpg" alt="" title="" class="img img-responsive" /></figure>
            </a></div>

    </div>
    
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/footer.php') ?>
</body>
</html>