<!-- pages -->
<?php get_header(); ?>

<main class="container page section no-sidebars">
<?php while(have_posts() ) : the_post(); ?>
<h1 class="text-center text-primary"> <?php the_title() ?></h1>

<div class="text-center">
<?php  
         if( has_post_thumbnail()) :
           the_post_thumbnail('blog', array('class' => 'featured-image'));
         endif;
?>
<?php the_content() ?> 
        </div>

      


<?php endwhile;  ?>
</main>

<?php get_footer(); ?>