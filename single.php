<?php get_header(); ?>
<?php if(have_posts(  )):while(have_posts(  )):the_post(  );?>

<?php the_content(); ?>
<?php if(have_posts()): while(have_posts(  )):?>

  <?php if(have_posts()){the_title();}?>

<?php endwhile;endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>


