 <div class="w-section blog-feed-section">
    <div class="w-container blog-feed-container">





<div class="w-dropdown w-clearfix dropdown-blog" data-delay="0">
<div class="w-dropdown-toggle w-clearfix blog-filter-dropdown">
          <div class="blog-topics">FILTER ARTICLES BY TOPIC</div><img class="arrow" src="/files/images/dropdown arrow.svg"> 

        </div>
  <nav class="w-dropdown-list dropdown-list">
<?php
          // foreach($teasers as $teaser) {
          //   //dpm($teaser);
          //   print' <a class="w-dropdown-link blog-topic-links" href="'.$teaser.'">'.$teaser.'</a>';
          // }
          foreach($topics as $topic) {
            //dpm($teaser);
            print'<a class="w-dropdown-link blog-topic-links" href="/blog/'.str_replace(" ", "-", strtolower($topic->name)).'">'.$topic->name.'</a>';
          }
          print'<a class="w-dropdown-link blog-topic-links" href="/blog">ALL TOPICS</a>';
      ?>
  </nav>
</div>

<?php print views_embed_view('blog', 'block'); ?>

