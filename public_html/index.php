
<!DOCTYPE html>
<html>
    <head>
        <title>Vincent Nguyen's Portfolio</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="portfoliocss.css" media="screen" />
        <script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="coin-slider.min.js"></script>
	<link rel="stylesheet" href="coin-slider-styles.css" type="text/css" />
    
    </head>
    <body>
    <div id ="header">
        <img id="imglogo" src="images/vnimage.png" alt="logo"/>     
    </div>  
        <div id="links">      
                <ul>
                    <li id="active"><a href="index.html" title="">Home</a></li>
                    <li><a href="aboutme.html" title="">About Me</a></li>
                    <li><a href="projects.html" title="">Projects</a></li>
                    <li><a href="services.html" title="">Services</a></li>
                    <li><a href="https://github.com/VincentNguyen" title="">GitHub</a></li>
                    <li><a href="contactme.html" title="">Contact Me</a></li>
                </ul>    
        </div> 
        <div id='coin-slider'>
	    <a href="http://webdesign4.georgianc.on.ca/~200210636/TradingCards/index.html" target="_blank">
	        <img src="images/tradingcimage.png" >
                <span>    
                My Trading Card Project.
	        </span>
	    </a>
	    <a href="https://github.com/VincentNguyen">
	        <img src="images/githubimage.png" >
	        <span>
	            My GitHub Account.
	        </span>
	    </a>
	</div>
        
       <script type="text/javascript">
	    $(document).ready(function() {
	        $('#coin-slider').coinslider({ width: 900, navigation: false, delay: 5000 });	   
            });
	</script>
    </body>
</html>
