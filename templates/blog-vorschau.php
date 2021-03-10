<?php
/**
 * Template Name: Blog Vorschau
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */
get_header();
?>

<main id="site-content" role="main">
    
    <div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">
            
<!--            <h2 class="blog-vorschau">Blog</h2>-->
    
<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul class="vorschau">
 
    <!-- the loop -->
    <?php 
    
    while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
    $post_date = get_the_date( 'j. F Y' ); 
    ?>
        <li >
            <a href="<?php the_permalink(); ?>">
            <h3 ><?php the_title(); ?></h3>
            <p class="datum-vorschau"><?php echo $post_date; ?></p>
            <p class="text-vorschau"><?php echo get_the_excerpt(); ?></p>
                
            </a>
            
        </li>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
    
    
        </div>
    </div>

</main><!-- #site-content -->

<div id="menu-frauenweihe">
<?php wp_nav_menu(); ?>
</div>


<?php // get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
