<?
get_header();
while(have_posts()) {
  the_post(); ?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<? echo get_theme_file_uri('/images/ocean.jpg'); ?>)"></div>
      <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><? the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>DON'T FORGET TO REPLACE ME LATER</p>
        </div>
      </div>
    </div>
<?
$theParent = wp_get_post_parent_ID(get_the_ID());
 if($theParent){ ?>
    <div class="container container--narrow page-section">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
        <a class="metabox__blog-home-link" href="<? echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <? echo get_the_title($theParent); ?></a> <span class="metabox__main"><? the_title(); ?></span>
        </p>
      </div>
<? } ?>

<!--
      <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li>
        </ul>
      </div>
-->
      <div class="generic-content">
        <? the_content(); ?>
      </div>
    </div>

<? }
get_footer();
