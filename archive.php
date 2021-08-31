<?php 
get_header();
?>

<main>
<div class="col s12 m7">
    <h2 class="header">Notre collection</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="https://www.pngitem.com/pimgs/m/109-1096278_transparent-open-book-png-books-vintage-art-png.png"style="height: 120px; width: 150px">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Découvrez toute notre super collection </p>
        </div>
        <!-- <div class="card-action">
          <a href="#">This is a link</a>
        </div> -->
      </div>
    </div>
  </div>
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
        <p><a href="<?php the_permalink(); ?>"><?php the_author_link(); ?></a></p>
  
        <img src="<?php echo wp_get_attachment_url(get_field('image_0')); ?>" alt="">

        





        
<?php


	} // end while
} // end if
?>

</main>


<?php get_footer(); ?>
