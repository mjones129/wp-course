<?
while(have_posts()) {
  the_post(); ?>
  <h1>This is a page, not a post.</h1>
  <h2><? the_title(); ?></h2>
  <? the_content(); ?>
<? }