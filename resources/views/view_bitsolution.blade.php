<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
          
    <!-- ===========================
    THEME INFO
    =========================== -->
    <meta name="description" content="A free Bootstrap powerd HTML template exclusively crafted for the super lazy designers like me who designed thousand of websites till today but never got a chance to build one himself.">
    <meta name="keywords" content="Free Portfolio Template, Free Template, Free Bootstrap Template, Dribbble Portfolio Template, Free HTML5 Template">
    <meta name="author" content="EvenFly Team">
    
    <!-- DEVEOPER'S NOTE:
    This is a free Bootstrap powered HTML template from EvenFly. Feel free to download, modify and use it for yourself or your clients as long there is no money involved.
    
    Please don't try to sale it from anywhere; because I want it to be free, forever. If you sale it, That's me who deserves the money, not you :)
    -->

    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>BITSolution</title><!-- This is what you see on your browser tab-->
    
    <!-- ===========================
    FAVICONS
    =========================== -->
    <link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />
     
    <!-- ===========================
    STYLESHEETS
    =========================== -->    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
        
    <!-- ===========================
    ICONS: 
    =========================== -->
    <link rel="stylesheet" href="css/simple-line-icons.css">    
    
    <!-- ===========================
    GOOGLE FONTS
    =========================== -->    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  <!-- ===========================
   GOOGLE ANALYTICS (Optional)
   =========================== -->
    
    <!--Replace this line with your analytics code-->
     
    <!-- Analytics end-->
  
   </head>
    <body data-spy="scroll" style="background:url('./img/maze.png');">
        <!-- Preloader -->
        <div id="preloader">           
            <div id="status">
                <div class="wow tada infinite" data-wow-duration="8s">BIT</div>
            </div>
        </div>
        
        <div id="about" class="container">
        <br><br>
        <!-- Home -->
         <div class="col-md-12">
	        <div class="col-md-6" style="z-index:10;">
	         
	          <h1 class="wow swing myphoto " data-wow-duration="4s">
	          	<br><strong>BIT</strong>Solution 
	          </h1>
	             <br>
	          <h2 class="wow bounceIn"  data-wow-duration="4s">
	          	<blockquote class="pull-right">
				 <p style="color:black;">The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
				 <small>by <cite>Albert Einstein</cite></small>
				</blockquote>
	           </h2>
	          
	        </div>

	        <div class="col-md-4 col-md-offset-1 wow rotateIn" id="wrapcube" data-wow-duration="3s" style="text-align:center;">
	         <br><br><br><br>
	          <center>
	        	<div class="wrap">
					<div class="cube" >
						<div class="front hex" onclick="rotatePage('index')" ><br>HOME
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
						<div class="topleft hex">
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
						<div class="top hex" onclick="rotatePage('portfolio')"><br>PORTFOLIO
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
						<div class="bottom hex" onclick="rotatePage('bitsolution')"><br>BITSolution
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
						<div class="left hex" onclick="rotatePage('contactus')"><br>CONTACT US
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
						<div class="back hex" onclick="rotatePage('product')"><br>PRODUCT
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
						<div class="right hex" onclick="rotatePage('client')"><br>CLIENT
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
					</div>
				</div>
			  </center>
	        </div>
         </div><!-- Home SECTION END -->
	     </div><!-- Home SECTION END -->
	        
	   
        
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!--Other necessary scripts-->
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.jribbble-1.0.1.ugly.js"></script>
    <script src="js/drifolio.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>    

    <script type="text/javascript">
        var timer = 0;
        setInterval(function() {
            timer++;
        }, 10); // every 5 sec

        function rotatePage(x){
            $("html").addClass("rotate360cw");
            setTimeout(function() {
                window.location = x + "";
            }, 300); // every 5 sec
        }
            

       $( ".cube" )
          .mouseenter(function() {
          })
          .mouseleave(function() {
            $(".cube").addClass("pointerevent");
            setTimeout(function() {
                $(".cube").removeClass("pointerevent");
            }, 1000);
          });
    </script>
  </body>
</html>