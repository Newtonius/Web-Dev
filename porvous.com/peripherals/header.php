<style type="text/css">
        <?php
            $r=rand(0,255);
            $g=rand(0,255);
            $b=rand(0,255);
        ?>
    #mainNavBar a:hover, visited li {
        -webkit-text-shadow: 2px 2px 5px #ffffff;
        text-shadow: 2px 2px 5px #ffffff;
        background:rgba(
            <?php echo $r ?>,
            <?php echo $g ?>,
            <?php echo $b ?>,
            0.75);
        -webkit-transform:scale(1.15)translateY(5px);
        transform:scale(1.15)translateY(5px);
    }

</style>

<div class="background">
    <img src="/GFX/siteGFX/background (1)-min.jpg" alt="" />
</div>

<header>
    <div>
        <ul id="mainNavBar">
			       <a href="http://Porvous.com/index.php" target="_self">
                <li>
                    <p>
                        Home
                    </p>
                </li>
              </a>
              <?php
                $navTab = array( "Gallery","Travel","Contact");
                for($i=1; $i<=count($navTab); $i++):
                  ?>
              <a href="http://Porvous.com/<?php echo $navTab[$i-1] ?>.php" target="_self">
                <li>

                     <!-- <img src="http://Porvous.com/GFX/siteGFX/<?php echo $navTab[$i-1] ?>-icon.png" align="left" width="30" height="30" alt="" /> -->
                    <p>
                        <?php echo $navTab[$i-1] ?>
                    </p>
                </li>
              </a>
            <?php endfor; ?>
        </ul>
    </div>
</header>
<span class="anchor"></span>
<div class="foreground">
    <div class="overlay">
