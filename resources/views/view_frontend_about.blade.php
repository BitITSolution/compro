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
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300"> -->

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
                <div class="wow tada infinite" data-wow-duration="5s">BIT</div>
            </div>
        </div>
        
        <div id="about" class="container">
          <center>
                <div class="nav">
                  <ul>
                    <li class="home" onclick="rotatePage('index')"><a href="#">Home</a></li>
                    <li class="tutorials"><a class="active">BITSolution</a></li>
                    <li class="about" onclick="rotatePage('career')"><a href="#">Career</a></li>
                    <li class="news" onclick="rotatePage('product')"><a href="#">Product</a></li>
                    <li class="contact" onclick="rotatePage('client')"><a href="#">Client</a></li>
                    <li class="contact" onclick="rotatePage('contact')"><a href="#">Contact Us</a></li>
                  </ul>
                </div>
            
                <div class="col-md-2"></div>
                <div class="col-md-8" class="wow swing"  data-wow-duration="3s">
                    <h1>
                      <br>We're <strong>BIT</strong>Solution
                    </h1>
                  
                      <div class="aboutright_header">
                        <b>
                         <h3>Capoeira is often described as a combination of martial arts, dance and acrobratics.</h3>
                        </b>
                      </div>

                      <div class="aboutright_body">
                          <br>
                        Originally it was used as a disguished fight by the slaves who were shipped to Brazil and put to labour. They made it look like a dance, but in reality they were training their fighting skills to be able to stand up against their slave masters and fight for their freedom.
                          <br>
                        Since that time capoeira has developed in Brazil and nowadays there are two styles of capoeira: Capoeira Angola and Capoeira Regional.
                          <br><br>
                        Capoeira is played in a circle (roda). The circle consists of the 'bateria', the people playing the instruments and thereby deciding what is happening within the roda, and the rest of the capoeiristas clapping and singing along to raise the energy. There are always two people playing in the roda.
                      </div>
                </div>
          </center>
        @include('frontend.footer')    
  </body>
</html>


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

        function changeContent(x){
            $("#contentPortfolio").addClass("zoomOutanimation");
            setTimeout(function() {
                $("#contentPortfolio").removeClass("zoomOutanimation");
                $.post("data/viewProduct.php", { work:x },
          function(result) { 
             $("#contentPortfolio").html(result);
            }
          );
            }, 200); // every 5 sec
        }
            
        function resetContent(){
            $("#contentPortfolio").addClass("zoomOutanimation");
            setTimeout(function() {
                $("#contentPortfolio").removeClass("zoomOutanimation");
                $.post("data/viewProduct.php", { work:"default" },
          function(result) { 
             $("#contentPortfolio").html(result);
            }
          );
            }, 200); // every 5 sec
        }
    </script>