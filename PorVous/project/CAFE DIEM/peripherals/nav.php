<style>
    nav {
        margin-left: auto; margin-right: auto;
        width: 40%; height: auto;
        z-index: 35;
        position: relative;
        background:rgba(0,0,0,0.25);
        -webkit-transition: background 0.25s ease;
        -moz-transition: background 0.25s ease;
        transition: background 0.25s ease;
        border-radius: 25px;
        padding: 10px;
    }
    nav:hover {
        background:rgba(0,0,0,0.35);
    }
    #NavBar ul {
        width: 100%;
        z-index: -5;
        list-style-type: none;
        text-align: center;
    }
    #NavBar ul li {
        padding: 10px;
        width: auto;
    }
    #NavBar ul a,visited li {
        border-radius: 10px;
        z-index: 5;
        font-family: 'Montserrat', sans-serif;
        color: #ffffff;
        font-size: 14pt;
        display: inline-block;
        text-decoration: none;
        -webkit-transition: all 0.25s ease;
        -moz-transition: all 0.25s ease;
        transition: all 0.25s ease;
        text-align: center;
    }
    #NavBar ul a:hover, visited li{
        -webkit-text-shadow: 2px 2px 5px #ffffff; 
        text-shadow: 2px 2px 5px #ffffff;
        <?php 
            $r=rand(1,255);
            $g=rand(1,255);
            $b=rand(1,255);
        ?>
        background:rgba(
            <?php echo $r ?>,
            <?php echo $g ?>,
            <?php echo $b ?>,             
            0.75);
    }
    @media screen and (max-width: 575px) {
        nav {
            position: relative;
            top: 0px;
        }
        #NavBar ul a,visited li {
            font-size: 12pt;
            margin: -10px;
        }
    }
</style>
<nav id="NavBar">
    <ul>
        <?php
            $navTab = array("Eaaat", "About Us", "Croissants!");
            for($i=1; $i<=count($navTab); $i++):    
        ?>
        <a href="#" target="_parent">
            <li>
                <p>
                    <?php echo $navTab[$i-1] ?>
                </p>
            </li>
        </a>
        <?php endfor; ?>
    </ul>
</nav>