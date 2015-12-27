<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
          
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <title>Maxel IT Solution</title>
    
    <link rel="icon" href="img/favicon.png">
     
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">    
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
                <div class="wow tada infinite" data-wow-duration="2s"><img src="img/favicon.png" style="width:100px;"></div>
            </div>
        </div>
        
        <div id="about" class="container">
          <center>
            <h1 class="wow swing" data-wow-duration="4s">
                <strong><img src="img/maxel-02.png" style="width:350px;"></strong> 
            </h1>
          </center>
          <br><br><br><br><br>
        <!-- Home -->
         <div class="col-md-12" style="height:auto;">
	        <div class="col-md-6" style="z-index:10;">
	          <h2 class="wow bounceIn" data-wow-duration="4s" style="min-height:50px;height:50px;">
	          	<blockquote class="pull-right"id="contentDetail">
                 <p style='color:black;'' >The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
                 <small>by <cite>Albert Einstein</cite></small>
				      </blockquote>
	           </h2>
	          <br><br>
	        </div>

	        <div class="col-md-4 col-md-offset-1 wow rotateIn" id="wrapcube" data-wow-duration="3s" style="text-align:center;">
	          <center>
	        	<div class="wrap">
					<div class="cube">
						<div class="topleft hex">
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
                        <div class="front hex" onclick="rotatePage('planner')" ><br><strong>PLANNER</strong>
                            <div class="corner-1"></div>
                            <div class="corner-2"></div>
                        </div>
						<div class="top hex" onclick="rotatePage('career')" ><br><strong>KARIR</strong>
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
						<div class="bottom hex" onclick="rotatePage('about')" ><br><strong>MAXEL</strong>
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
						<div class="left hex" onclick="rotatePage('contact')" ><br><strong>KONTAK</strong>
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
						<div class="back hex" onclick="rotatePage('product')" ><br><strong>PRODUK</strong>
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
						<div class="right hex" onclick="rotatePage('client')" ><br><strong>KLIEN</strong>
							<div class="corner-1"></div>
							<div class="corner-2"></div>
						</div>
					</div>
				</div>
			  </center>
	        </div>
         </div><!-- Home SECTION END -->
	    </div><!-- Home SECTION END -->
	       <br><br>
        @include('frontend.footer')
  </body>
</html>        
       
        
    
    <script src="js/jquery-latest.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    
    <!--Other necessary scripts-->
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.jribbble-1.0.1.ugly.js"></script>
    <script src="js/drifolio.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>    

    <script type="text/javascript">
        var timer = 0;
        var halaman = "";
        setTimeout(function() {
            $(".cube").addClass("pointerevent");
        }, 1);

        setTimeout(function() {
           $(".cube").removeClass("pointerevent");
        }, 4000); // every 5 sec

        function rotatePage(x){
            var isMobile = false; //initiate as false
            // device detection
            if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;

            if( isMobile == true){
                if(halaman != x){
                    halaman = x;
                }else{
                    movePage(x);
                }     
            }else{
                movePage(x);
            }
                   
        }

        function movePage(x){
            $("html").addClass("rotate360cw");
            setTimeout(function() {
                //window.location = x + "";
                window.location = "maxel";
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
            halaman="";

          });

        $( ".front" ).mouseenter(function() {
          showDetail("planner");
        });

        $( ".back" ).mouseenter(function() {
          showDetail("product");
        });

        $( ".top" ).mouseenter(function() {
          showDetail("career");
        });

        $( ".bottom" ).mouseenter(function() {
          showDetail("maxel");
        });

        $( ".left" ).mouseenter(function() {
          showDetail("contact");
        });

        $( ".right" ).mouseenter(function() {
          showDetail("client");
        });

        function showDetail(x){
            $("#contentDetail").fadeOut(100);
            setTimeout(function() {
                $.post("data/viewDetailHome_indo.php", { work:x },
                  function(result) { 
                     $("#contentDetail").html(result);
                     $("#contentDetail").fadeIn(100);
                    }
                  );
            }, 50); 
        }
    </script>
