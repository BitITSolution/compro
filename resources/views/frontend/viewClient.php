 <br><br><br>
<?php 
  $forlength = 2;
  $ctr = 0; 
  $check = 4;

  if ($forlength % 2 == 0) {
    $check = 3;
  }

  for($i = 0; $i < $forlength; $i++){
?>
   <!-- <div class="conhexagon open-popup" data-popup="#popup<?php echo $i;?>"> -->
   <div class="conhexagon">
    <?php if($i == 0){ ?>
      <a target="_blank" href="http://pdgicabsamarinda.or.id/">
    <?php }else if($i == 1){ ?>
      <a target="_blank" href="http://littlealannahmay.com.au/">
    <?php } ?>
   
    <svg viewbox="0 0 100 100">
      <defs>
        <pattern id="img<?php echo $i; ?>" patternUnits="userSpaceOnUse" width="100" height="100">
        <?php if($i == 0){ ?>
          <image xlink:href="img/pdgi.png" x="-25" width="150" height="100" />
        <?php }else if($i == 1){ ?>
          <image xlink:href="img/clientlittle.png" x="-25" width="150" height="100" />
        <?php } ?>
         
        </pattern>
      </defs>
      <polygon points="50 1 95 25 95 75 50 99 6 75 6 25" fill="url(#img<?php echo $i; ?>)"/>  
      <div class="titlehexagon">
        <?php if($i == 0){ ?>
          PENGURUS CABANG <br> SAMARINDA <br> PERSATUAN DOKTER <br> GIGI INDONESIA
        <?php }else if($i == 1){ ?>
          Little <br> Alannah <br> May
        <?php } ?>
      </div>
      <div class="texthexagon">
       
      </div>
    </svg>
    </a>
    <!-- <span class="buttonhexagon" onclick="tes()">
        Details
    </span> -->
  </div>
<?php 
    $ctr++; 
    if($ctr == $check){ 
      echo '<br>';
      if ($check == 4){
        $check = 3;
      }else{
        $check = 4;
      }
      $ctr = 0;
    }
  } 
?>

<!-- <div class="conhexagon open-popup" data-popup="#popup<?php echo $i;?>"> -->
   <!-- <div class="conhexagon">
    <svg viewbox="0 0 100 100">
      <defs>
        <pattern id="img" patternUnits="userSpaceOnUse" width="100" height="100">
          <image xlink:href="img/s8.png" x="-25" width="150" height="100" />
        </pattern>
      </defs>
      <polygon points="50 1 95 25 95 75 50 99 6 75 6 25" fill="url(#img)"/>  
      <div class="titlehexagon">
        Title for portfolio
      </div>
      <div class="texthexagon">
        Hello World Hello World sd sd as
        
        Hello World Hello World sd sd as
      </div>
    </svg> -->
    <!-- <span class="buttonhexagon" onclick="tes()">
        Details
    </span> -->
  <!-- </div> -->