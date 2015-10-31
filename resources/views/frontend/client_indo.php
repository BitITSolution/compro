
    <style type="text/css">
		blockquote
		{
		    clear: both;
		    font-style: italic;
		    margin-left: 10px;
		    margin-right: 10px;
		    padding: 10px 10px 0 50px;
		    position: relative;
		    quotes: none;
		    background: url(img/open-quote.png) 0 0 no-repeat;
		    border: 0px;
		    font-size: 100%;
		    color: black;
		    line-height: 200%;
		}
		</style>

        
  <h1>
    <br><strong>Klien</strong> Kami
  </h1>
  <h4>
  	Orang-orang luar biasa yang bekerja sama dengan kami
    <br>
  </h4>

 
  <script type="text/javascript" src="js/carousels.js"></script>
  <script type="text/javascript">
      $(function(){
		  // vars for testimonials carousel
		  var $txtcarousel = $('#testimonial-list');
		  var txtcount = $txtcarousel.children().length;
		  var wrapwidth = (txtcount * 415) + 415; // 400px width for each testimonial item
		  $txtcarousel.css('width',wrapwidth);
		  var animtime = 750; // milliseconds for clients carousel

		  // prev & next btns for testimonials
		  $('#prv-testimonial').on('click', function(){
		    var $last = $('#testimonial-list li:last');
		    $last.remove().css({ 'margin-left': '-415px' });
		    $('#testimonial-list li:first').before($last);
		    $last.animate({ 'margin-left': '0px' }, animtime); 
		  });
		  
		  $('#nxt-testimonial').on('click', function(){
		    var $first = $('#testimonial-list li:first');
		    $first.animate({ 'margin-left': '-415px' }, animtime, function() {
		      $first.remove().css({ 'margin-left': '0px' });
		      $('#testimonial-list li:last').after($first);
		    });  
		  });
		})

  </script>
  
