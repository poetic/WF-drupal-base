
 <div class="w-section main-section social">
    <div class="w-container social-container">
      <h4 class="h4"><?php print  $title; ?></h4>
    </div>
    <div  class="instagram" id="instagram_list">
      <div id="instagram_spinner"></div>
    </div>
    <div class="w-container social-container">
       <?php
        foreach($socials as $social) {
          print '<a class="w-inline-block social-media" href="'.$social['link'].'"><img class="social-media" src="'.$social['image'].'"></a>';
        }
      ?>
    </div>
  </div>