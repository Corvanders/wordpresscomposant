




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>

<?php get_header(); ?>


<div class="col s12 m7">
    <h2 class="header">Les dernières sorties</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="https://api.tipeee.com/cache/20190608120026/media/1651471/08177a600006ad6886eac89c2491f94170f5f9a4.jpg"style="height: 120px; width: 150px">
      </div>
      <div class="card-stacked">
        <div class="card-content col l6 m12 s12">
          <p>Découvrez nos dernières parutions ! </p>
        </div>
        <!-- <div class="card-action">
          <a href="#">This is a link</a>
        </div> -->
      </div>
    </div>
  </div>



<div class="row">
  <div class="content col l12">
      <?php $loop = new WP_Query( array( 'post_type' => 'bd', 'posts_per_page' => '10' ) ); ?></div>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
     <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
      <p><a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></p>

      <img src="<?php echo get_field('image_0'); ?>" alt="thumb">
      



<?php endwhile;?>
</div>
</div>


<?php get_footer(); ?>






</body>
</html>