<?php
/**
* Template Name:Blog
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
           <h1 class="pagetitle-title heading">Blog</h1>
           <div id="breadcrumb" class="breadcrumb"><a class="breadcrumb-link" href="index.php">Home</a><span class="breadcrumb-separator"></span><span class="breadcrumb-title">Blog</span>
           </div>
           </div>
    </div>
</div>


<!-- BLOG SECTION START -->
<div class="blog-section" id="blog-section">
    <div class="container">
        <div class="section-heading blog-heading"data-animate-in="up">
             <div id="blog-subtitle" class="blog-subtitle section-subtitle">our blog</div>
             <div class="section-title blog-title heading">Recent blog posts</div>
          </div>
  
    <section id="content" class="content">
		    <div class="row">
        <?php 
                   $args = array(  
                    'post_type' => 'Blog',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'posts_per_page' => 6
                    );
                $loop = new WP_Query( $args ); 
               while ( $loop->have_posts() ) : $loop->the_post(); 
               ?>
            <div class="blogg column-narrow col-lg-4"data-animate-in="up">
                <div class="col-div" data-animate-in="up">
                    <img src="<?php the_field('blog_image');?>" class="blog-img">
                </div>
                <div class="bolg-content">
                    <h2 class="blog-title"> <?php the_field('blog_title'); ?>  </h2>
                </div>
       <div class="post-byline">
           <div class="post-date"><?php the_time( 'd F Y' ); ?></div>			
                 <div class="post-category">
                       <?php the_field('post_category');?>
                    </div>					
                 </div>
                     <div class="blog-paragraph">
                        <p class="blog-para"><?php the_field('blog_paragraph');?></p>
                     </div>
                    
                      <button id="read-more"> <a href="<?php echo get_permalink($post->ID);?>">Read-More</a></button>
                          <div class="post-comments"><a href="">1</a></div>

                      </div>
                      <?php
            endwhile;
            wp_reset_postdata(); 
         ?>
                   
         
       
        </div>
     </div>
  </div>
</div>









<?php
get_footer();
?>