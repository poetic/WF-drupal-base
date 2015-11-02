<div class="masthead-inner">
  <div class="content contextual-links-region">
    <?php print $contextual_links; ?>


    <div class="w-section main-section secondary-section">
        <div class="w-container">
          <div class="w-row">
            <?php
            foreach($activities as $activitie) {
             // dpm($activitie);
              print'<div class="w-col w-col-3 w-col-small-6">';
              print'<div class="w-clearfix list-block"><img class="feature-icon" src="'.$activitie['image'].'">';
              print'<h3 class="h3 primary">'.$activitie['link'].'</h3>';
              print'<ul class="bullet-list-block">';
                for($i = 0; $i < sizeof($activitie['collection']); $i++) {
                  Print'<li class="bullet-list">'.$activitie['collection'][$i]['text'].'</li>';
                }
              print'</ul>';
              print'</div>';
              print'</div>';
            }
            ?>
          </div>
        </div>
      </div>
     </div>


   </div>

