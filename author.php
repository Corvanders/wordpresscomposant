<?php get_header(); ?>
<?php
 $user_id = get_current_user_id();
?>

<?php
	$theauthor = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    $theauthor = (isset($_GET['wp_post'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

?>
     
<div class="author-profile-card">
    <h2>A propos de: <?php echo $theauthor->nickname; ?></h2>
    <div class="author-photo">
    <?php echo get_avatar( $theauthor->user_email , '90 '); 
    ?>
    </div>
    <?php the_author_meta( 'description', $authorid ); ?>
</div>
     

<?php 

$monjolitableau = array(  
    'post_type' => 'bd',
    'post_status' => 'publish',
    'posts_per_page' =>5, 
    'author' => $author,
    'orderby' => 'slug', 
    'order' => 'ASC',
   
);



$loop = new WP_Query( $monjolitableau ); 
    
while ( $loop->have_posts() ) : $loop->the_post(); 
 
    print the_title();
    
    print the_content();
    the_excerpt(); 
endwhile; ?>


<?php wp_reset_postdata(); ?> 
<?php get_footer(); ?>