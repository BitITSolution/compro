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
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
        
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
                <div class="wow tada infinite" data-wow-duration="6s">BIT</div>
            </div>
        </div>
        
        <div id="about" class="container">
          <div class="nav">
            <ul>
              <li class="home" onclick="rotatePage('index')"><a href="#">Home</a></li>
              <li class="tutorials" onclick="rotatePage('about')"><a href="#">BITSolution</a></li>
              <li class="about" onclick="rotatePage('career')"><a href="#">Career</a></li>
              <li class="news"><a class="active">Product</a></li>
              <li class="contact" onclick="rotatePage('client')"><a href="#">Client</a></li>
              <li class="contact" onclick="rotatePage('contact')"><a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-md-12">
            <center style="height:450px">
              <h1>
                <br>Our <strong>Works</strong>
              </h1>
              <h4>
                We develop a <strong>solution</strong> for your software and website problem.
                <br><br><br>
                <div>
                 <div class="glyphicon glyphicon-cog"    style="font-size:40px;margin:0;color:#ae6665;cursor:pointer;padding:10px;" onmouseover="changeContent('software')" onmouseout="resetContent()"></div>
                 <div class="glyphicon glyphicon-globe"  style="font-size:40px;margin:0;color:#dfba54;cursor:pointer;padding:10px;" onmouseover="changeContent('website')" onmouseout="resetContent()"></div>
                 <div class="glyphicon glyphicon-signal" style="font-size:35px;margin:0;color:#bfdf54;cursor:pointer;padding:10px;" onmouseover="changeContent('internet')" onmouseout="resetContent()"></div>
                 <div class="glyphicon glyphicon-hdd"    style="font-size:35px;margin:0;color:#2AB0C5;cursor:pointer;padding:10px;" onmouseover="changeContent('hardware')" onmouseout="resetContent()"></div>
                </div>
                 <!-- <img src = "./img/ig.png" width="40px" class="iconhover"> -->
              </h4>
              <div class="wow fadeIn" data-wow-duration="3s" id="contentPortfolio">
                 <h4>
                    Not only software and website
                    <br> we also work in computer networks and 
                    <br>hardware procurement. 
                 </h4>
              </div>
            </center>
              <hr>
          </div>

          <div class="col-md-12">
            <div class="wow fadeIn"  data-wow-duration="3s" style="text-align:center;">            
              <h4>
                <!-- Feel free to see some <strong>Project</strong> that we have made -->
                <br><br><br>
              </h4>

              @include('frontend.viewPortofolio')
            </div>
            <br><br>
          </div>
          
        </div>

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
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.fullscreen-popup.js"></script>
  <script src="js/jquery.fullscreen-popup.min.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/owl.carousel.min.js"></script>
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
              $.post("data/viewPortfolio.php", { work:x },
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
              $.post("data/viewPortfolio.php", { work:"default" },
        function(result) { 
           $("#contentPortfolio").html(result);
          }
        );
          }, 200); // every 5 sec
      }

      // FULL SCREEN POP UP
      $(function() {
        $(".open-popup").fullScreenPopup({
          // Options
        });
      });

      // AJAX POP UP
      function detailpopup(x){
        $("#titledetail").html("Popup #"+x);
        $(".owl-demo").trigger('autoplay.play.owl',[1000]);
      }

      // SLIDER
      $(document).ready(function() {
        $(".owl-demo").owlCarousel({
            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            loop:true,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true
            // "singleItem:true" is a shortcut for:
            // items : 1, 
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
        });
      });


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