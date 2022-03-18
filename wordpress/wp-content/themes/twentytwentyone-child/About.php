<?php
/**
* Template Name:About
* Template Post Type: post, page
*
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>






<div class="blog-section">
    <div class="blog-bg">
           <div class="blog-page-title">
           <h1 class="pagetitle-title heading">About</h1>
           <div id="breadcrumb" class="breadcrumb"><a class="breadcrumb-link" href="index.php">Home</a><span class="breadcrumb-separator"></span><span class="breadcrumb-title">About</span>
           </div>
           </div>
    </div>
</div>


<!-- //about section -->
<div id="about" class="section about">
	<div class="container">
		<div class=" section-heading about-heading">
			<div id="about-subtitle" class="about-subtitle section-subtitle">who we are</div>
			<div class="section-title about-title heading">About us</div>
		</div>			
			<div class="row">
			<?php 
                   $args = array(  
                    'post_type' => 'aboutus',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'posts_per_page' => 6
                  
     );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
               ?>
				<div class="column col-lg-4 col-md-4">
		
					<div class="about__content"data-animate-in="up">
		            	 <a href="#" title="Our Story">
			                     <img  src="<?php the_field('about_image'); ?>" width="500" height="427" class="about__image wp-post-image" alt=""/>	
					 	</a>
	         	<h3 class="about__title">
	               	<a href="" title="Our Story"><?php the_field('about_title'); ?></a>
	           </h3>
	   <p class="text-about"><?php the_field('about_us_content'); ?></p>
	</div>
</div>

<?php
      endwhile;
      
            wp_reset_postdata(); 
               
      ?>
  </div>		
 </div>
</div>
<!-- //about section end -->
























<?php
get_footer();
?>