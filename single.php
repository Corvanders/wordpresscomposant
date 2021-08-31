
<?php get_header(); ?>

<h1>SINGLE</h1>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
        ?>
        <h2>
            <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
        </h2>
        <h3>
            <a href="<?php the_permalink(); ?>">
            <?php the_author(); ?>
        </a>
        </h3>
        <p><?php the_author_link(); ?></a></p>
        <p><?php the_taxonomies() ?></p>
        <p><?php get_the_tags() ?></p>
<?php
	} // end while
} // end if
?>
<p class="contenu"><?php echo get_field('contenu'); ?></p>
<img src="<?php echo get_field('image_0'); ?>" alt=""><a></br>
<img src="<?php echo get_field('image_1'); ?>" alt="">




<?php get_footer(); ?>


