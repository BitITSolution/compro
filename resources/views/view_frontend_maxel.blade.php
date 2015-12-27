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
    <title>Maxel</title><!-- This is what you see on your browser tab-->
    
    <!-- ===========================
    FAVICONS
    =========================== -->
    <link rel="icon" href="img/favicon.png">
     
    <!-- ===========================
    STYLESHEETS
    =========================== -->    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
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
                <div class="wow tada infinite" data-wow-duration="8s"><img src="img/favicon.png" style="width:100px;"></div>
            </div>
        </div>
        
        <div id="about" class="container" style="min-height:500px;">
          <center>
                <div class="nav">
                  <ul>
                    <li class="index" onclick="movePage('index')"><a href="#">Home</a></li>
                    <li class="about" onclick="movePage('about')"><a class="active"><img src="img/maxel-02.png" style="width:85px;"></a></li>
                    <li class="career" onclick="movePage('career')"><a href="#">Karir</a></li>
                    <li class="product" onclick="movePage('product')"><a href="#">Produk</a></li>
                    <li class="planner" onclick="movePage('planner')"><a href="#">Planner</a></li>
                    <li class="client" onclick="movePage('client')"><a href="#">Klien</a></li>
                    <li class="contact" onclick="movePage('contact')"><a href="#">Kontak Kami</a></li>
                  </ul>
                </div>
            
                <div class="col-md-12" class="wow swing"  data-wow-duration="3s">
                    <div id="viewabout" style="padding-left:15%;padding-right:15%;">
                        @include('frontend.about_indo')   
                    </div>
                    <div id="viewcareer" style="display:none;">
                        @include('frontend.career_indo')
                    </div>
                    <div id="viewplanner" style="display:none;">
                        @include('frontend.planner_indo')
                    </div>
          </center>
                    <div id="viewproduct" style="display:none;">
                        @include('frontend.product_indo')
                    </div>
          <center>
                    <div id="viewclient" style="display:none;">
                        @include('frontend.client_indo')
                        @include('frontend.viewTestimonial_indo')
                        @include('frontend.viewClient_indo')
                    </div>
                    <div id="viewcontact" style="display:none;">
                        @include('frontend.contact_indo')
                    </div>
                </div>

          </center>
        </div>
         @include('frontend.footer')
  </body>
</html>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!--Other necessary scripts-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.jribbble-1.0.1.ugly.js"></script>
    <script src="js/drifolio.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
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
            /*$("#contentPortfolio").fadeOut(10);
            setTimeout(function() {
                $.post("data/viewProduct_indo.php", { work:x },
                  function(result) { 
                     $("#contentPortfolio").html(result);
                     $("#contentPortfolio").fadeIn(1);
                    }
                  );
            }, 5); */
        }

        function chooseContent(x){
        	$("#contentPortfolio").fadeOut(10);
            setTimeout(function() {
                $.post("data/viewProduct_indo.php", { work:x },
                  function(result) { 
                     $("#contentPortfolio").html(result);
                     $("#contentPortfolio").fadeIn(1);
                    }
                  );
	            $.post("data/viewPortfolio_indo.php", { work:x },
	                function(result) { 
	                 $("#contentproduct").html(result);
	                }
	            );
            }, 5); 
        }
            
        function resetContent(){
           /* $("#contentPortfolio").fadeOut(10);
            setTimeout(function() {
                $.post("data/viewProduct_indo.php", { work:"default" },
                  function(result) { 
                     $("#contentPortfolio").html(result);
                     $("#contentPortfolio").fadeIn(1);
                    }
                  );
            }, 5); */
        }


        function movePage(x){
            if(x == "index"){
                window.location="index";
            }else{
                $("#viewabout").fadeOut();
                $(".about a").removeClass("active");

                $("#viewcareer").fadeOut();
                $(".career a").removeClass("active");

                $("#viewproduct").fadeOut();
                $(".product a").removeClass("active");

                $("#viewplanner").fadeOut();
                $(".planner a").removeClass("active");

                $("#viewclient").fadeOut();
                $(".client a").removeClass("active");

                $("#viewcontact").fadeOut();
                $(".contact a").removeClass("active");

                $("#view"+x).delay(300).fadeIn();
                $("."+ x +" a").addClass("active");

                if(x == "planner"){
                    $(".container").css( "height", "1200px" );
                }if(x == "product"){
                    $(".container").css( "height", "2500px" );
                }else{
                    $(".container").css( "height", "auto" );
                }
            }

        }
    </script>