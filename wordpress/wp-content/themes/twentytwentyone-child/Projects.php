<?php
/**
* Template Name:Projects
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
           <h1 class="pagetitle-title heading">Project</h1>
           <div id="breadcrumb" class="breadcrumb"><a class="breadcrumb-link" href="index.php">Home</a><span class="breadcrumb-separator"></span><span class="breadcrumb-title">Project</span>
           </div>
           </div>
    </div>
</div>










<div class="pro-section">
<div class="container">
<div class="section-heading pro-heading">
             <!-- <div id="blog-subtitle" class="pro-subtitle section-subtitle">our blog</div>
             <div class="section-title pro-title ">Project List</div> -->
        </div>
    <div class="row">

            <?php
                $the_query = new WP_Query( array('posts_per_page'=>3,
                'post_type'=>'Projects',
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
            ); 
            ?>
             <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
     
             <div class="col-lg-4 mt-5">
                <div class="card " >
                    <img class="card-img" src="<?php the_field('project_image');?>" alt="Card image" style="width:100%">
                <div class="card-body c-body">
                    <h4 class="card-title"><?php the_field('project_name');?></h4>
                    <p class="card-text mbr-text"><?php the_field('project_content');?></p>
                    </div>
                    <a href="<?php echo get_permalink($post->ID);?>" class="red-more">Read More</a>
                </div>
                </div>
                
       <?php
endwhile;

$big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
) );

wp_reset_postdata();


?>

</div>
    
   
</div>
</div>

<?php
get_footer();
?>