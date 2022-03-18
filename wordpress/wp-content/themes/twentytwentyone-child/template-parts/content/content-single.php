<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<style>
    #enti{
    font-size: 22px;
    text-transform: uppercase;
    color: #c01d1d;
    }
    .news-csp{
        display:flex;
       }
    .csp1{
width:70%;
    }

.csp2 {
    width: 30%;
    padding: 5px;
    padding-left: 26px;
    margin-left: 50px;
    box-shadow: rgb(100 100 111 / 20%) 1px 0px 29px 0px;
    height: 310px;
    margin-top: 11px;
}

.post-thumbnail .wp-post-image {
    display: block;
    width: auto;
    max-width: 100%;
    margin-left:0;
    /* margin-right: auto; */

}
figure.post-thumbnail {
margin-top:-50px;
     
}
.contentt p img{

    width: 100%;
    height: 330px;

}
.csp1 .post-thumbnail img {
    max-width: 810px!important;
    height: 300px!important;
    flex-shrink: 0!important;
}
 .recent_post {
    list-style: none;
    padding: 12px 3px 3px 3px;
}
h1.entry-title.customs {
    font-size: 24px;
    font-family: serif;
    color: #055c56;
    font-weight: 600;
}
    .recent_post li a{
        color: #323178;
    font-size: 14px;
    text-transform: uppercase;
    margin-top: 6px;
    font-weight: 600;
    font-family: sans-serif;
}
.csp2 >h2{
    font-size: 25px;
    color: #459679;
    padding-top: 18px;
    font-weight: 500
}
.post-navigation .post-title {
    margin: 2px 14px!important;
    font-size: 17px;
}
.nav-previous a {
    display: flex;
    flex-direction: row!important;
}
p.meta-nav {
    font-size: 17px;
}
.navigation a:hover {
    color: ;
    text-decoration: none!important;
    text-decoration-style: none!important;
}

.navigation .nav-links .nav-next a, .navigation .nav-links .nav-previous a {
    display: flex;
    flex-direction: row!important;
}
.contentt {
    font-size: 16.5px;
    font-family: -webkit-pictograph;
}
img.attachment-feature_image.size-feature_image.wp-post-image {
    height:265px!important;
}


 </style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title customs">', '</h1>' ); ?>


		<div class="news-csp">
            <div class="csp1 ">

		<?php twenty_twenty_one_post_thumbnail(); ?>
		<div class="contentt">
	<!-- .entry-header -->
	<div class="entry-contenit">
		
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div>
	</div>
	</div>
    
	<div class="csp2">
              <h2>Recent Post</h2>
                  <div class="recent_post">
                      
				  <?php 
                   $args = array(  
                    'post_type' => 'Blog',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'posts_per_page' => 6
                    );
                $loop = new WP_Query( $args ); 
               while ( $loop->have_posts() ) : $loop->the_post(); 
			   $title= get_the_title();
			   echo '<li><a href="' . get_permalink($post->ID) . '" title="Look '. $title.'" >' .     $title.'</a> </li> ';
               ?>

<?php
            endwhile;
            wp_reset_postdata(); 
         ?>
               
             


	</header>
	<!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
