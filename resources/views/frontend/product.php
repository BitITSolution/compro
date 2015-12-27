
          <div class="col-md-12">
            <center style="height:450px">
              <h1>
                <br>Our <strong>Works</strong>
              </h1>
              <h4>
                We develop a <strong>solution</strong> for your software and website problem.
                <br><br><br>
                <div>
                 <div class="glyphicon glyphicon-cog"         style="font-size:40px;margin:0;color:#ae6665;cursor:pointer;padding:15px;margin:-5px;border:0px solid black;" onmouseover="changeContent('software')" onmouseout="resetContent()"  onclick="chooseContent('software')"></div>
                 <div class="glyphicon glyphicon-globe"       style="font-size:40px;margin:0;color:#dfba54;cursor:pointer;padding:15px;margin:-5px;border:0px solid black;" onmouseover="changeContent('website')"  onmouseout="resetContent()"  onclick="chooseContent('website')"></div>
                 <div class="glyphicon glyphicon-signal"      style="font-size:35px;margin:0;color:#DFE32D;cursor:pointer;padding:15px;margin:-5px;border:0px solid black;" onmouseover="changeContent('internet')" onmouseout="resetContent()"  onclick="chooseContent('internet')"></div>
                 <div class="glyphicon glyphicon-hdd"         style="font-size:35px;margin:0;color:#bfdf54;cursor:pointer;padding:15px;margin:-5px;border:0px solid black;" onmouseover="changeContent('hardware')" onmouseout="resetContent()"  onclick="chooseContent('hardware')"></div>
                 <div class="glyphicon glyphicon-picture"  style="font-size:35px;margin:0;color:#2AB0C5;cursor:pointer;padding:15px;margin:-5px;border:0px solid black;"    onmouseover="changeContent('design')"   onmouseout="resetContent()"  onclick="chooseContent('design')"></div>
                 <div class="glyphicon glyphicon-film"        style="font-size:35px;margin:0;color:#9669FE;cursor:pointer;padding:15px;margin:-5px;border:0px solid black;" onmouseover="changeContent('video')"    onmouseout="resetContent()"  onclick="chooseContent('video')"></div>
                </div>
                 <!-- <img src = "./img/ig.png" width="40px" class="iconhover"> -->
              </h4>
              <div class="wow fadeIn" data-wow-duration="3s" id="contentPortfolio">
                 <h4>
                    Not only software and website
                    <br> we also work in computer networks, hardware procurement, 
                    <br> mobile application, and digital artwork. 
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

  <script src="js/jquery-latest.min.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.fullscreen-popup.js"></script>
  <script src="js/jquery.fullscreen-popup.min.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script type="text/javascript">
     
      // AJAX POP UP
      function detailpopup(x){
        $("#titledetail").html("Popup #"+x);
        $(".owl-demo").trigger('autoplay.play.owl',[1000]);
      }

       // FULL SCREEN POP UP
          $(function() {
            $(".open-popup").fullScreenPopup({
              // Options
            });
          });

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

  </script>
