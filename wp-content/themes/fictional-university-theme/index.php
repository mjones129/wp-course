<? 
get_header(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<? echo get_theme_file_uri('/images/ocean.jpg'); ?>)"></div>
      <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Welcome To Our Blog!</h1>
        <div class="page-banner__intro">
          <p>Keep up with our latest news</p>
        </div>
      </div>
    </div>
<div class="container container--narrow page-section">
<? while(have_posts()){
  the_post(); ?>
    <div class="post-item">
    <h2 class="headline headline--medium headline--post-title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
    </div>
    <div class="metabox">
    <p>Posted by <? the_author_posts_link(); ?> on <? the_time('n.j.y'); ?> in <? echo get_the_category_list(', '); ?>.</p>
    </div>
    <div class="generic-content">
      <? the_excerpt(); ?>
      <p><a class="btn btn--blue" href="<? the_permalink(); ?>">Read More &raquo;</a></p>
    </div>
<? } ?>
</div>
<? get_footer();
?>
