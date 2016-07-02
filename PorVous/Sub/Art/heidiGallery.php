<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>Schmetterling's Gallery</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
	    <meta HTTP-EQUIV="Expires" CONTENT="-1">
	    <link rel="shortcut icon" href="/GFX/siteGFX/icon_heart1.png"/>

	    <link rel="stylesheet" href="/CSS/core.css" type="text/css" />
		<link rel="stylesheet" href="/CSS/gallery.css" type="text/css" />
		
	</head>
	<body>

		<?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/header.php') ?>
				<h1>Oh ja ;)</h1>
							
				<div class="galleryContainer">
			                    <?php
			                        for($i = 1; $i <= 22; $i++):
			                    ?>
								
								<div class="img-container">
									<a href="/GFX/artGFX/heidiGallery/<?php echo $i; ?>.jpg">
										<figure>
											<img src="/GFX/artGFX/heidiGallery/<?php echo $i; ?>.jpg" alt="" title="" class="img" />
										</figure>
									</a>
								</div>
			                    <?php endfor; ?>
			    </div>
	    <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/footer.php') ?>
	    
	</body>
</html>