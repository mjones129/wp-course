<?
get_header();
while(have_posts()) {
  the_post(); ?>
  <h2><? the_title(); ?></h2>
  <? the_content(); ?>
<? }
get_footer();
