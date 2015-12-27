
    <h1>
    <br>Kesempatan untuk <br>Berkarir dengan Kami
    </h1>
            
    <div class="col-md-12">
      <hr style="border-color:black;width:70%;">
      <h3><br><br><br>Untuk saat ini sedang tidak ada lowongan.<br><br><br></h3>
      <h4>Informasi lebih lanjut hubungi kami di info@maxel.id</h4>
      <!-- <h4>
        Want to work with us? Submit your profile. 
        <br>Verified your email within <b>3 days</b> and we’ll get back to you as soon as possible.
          <br><br><br>

        <h4>Speciality :</h4>
        <b id='choosespecial' style="color:#2AB0C5;"></b>
        <div>
          <div class="glyphicon glyphicon-cog notactive"    id="Software" style="font-size:40px;margin:0;color:#ae6665;cursor:pointer;padding:10px;" onclick="choosespeciality('Software')"></div>
          <div class="glyphicon glyphicon-globe notactive"  id="Website" style="font-size:40px;margin:0;color:#dfba54;cursor:pointer;padding:10px;" onclick="choosespeciality('Website')"></div>
          <div class="glyphicon glyphicon-signal notactive" id="Internet" style="font-size:35px;margin:0;color:#bfdf54;cursor:pointer;padding:10px;" onclick="choosespeciality('Internet')"></div>
          <div class="glyphicon glyphicon-hdd notactive" 	id="Hardware" style="font-size:35px;margin:0;color:#2AB0C5;cursor:pointer;padding:10px;" onclick="choosespeciality('Hardware')"></div>
        </div>
        <br>
        <h4>Identity</h4>
        <form class="form-inline">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Name">
          </div>
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>                  
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Phone</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Phone">
          </div>
          <br><br>
           <h4>Your Skill</h4>
          <textarea class="form-control" rows="3" style="resize:none;color:black;width:60%;" placeholder="e.g PHP, .NET, C++, CodeIgniter"></textarea>
          <br><br><br>
          <button type="submit" class="btn btn-warning">Submit</button>
          <br>
        </form>
      </h4> -->
    </div>
           
    <script type="text/javascript">
      
        function choosespeciality (x) {
        	$('#choosespecial').html(x);
        	if(x == "Software"){ $('#choosespecial').css('color','#ae6665'); }
        	if(x == "Website"){ $('#choosespecial').css('color','#dfba54'); }
        	if(x == "Internet"){ $('#choosespecial').css('color','#bfdf54'); }
        	if(x == "Hardware"){ $('#choosespecial').css('color','#2AB0C5'); }
        	$('#Software').css('opacity',0.4);
        	$('#Website').css('opacity',0.4);
        	$('#Internet').css('opacity',0.4);
        	$('#Hardware').css('opacity',0.4);
        	$('#'+x).css('opacity',1);
        }
    </script>