<?php
/**
* Template Name:Home
* Template Post Type: post, page
*
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<!-- //slider section -->


<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>

<!-- //slider-end -->



<!-- //features section -->

<div id="features" class="section features">
	<div class="container">	
		<div class=" section-heading features-heading">
			<div id="features-subtitle" class="features-subtitle section-subtitle">show &amp; tell</div>
			  <div class="section-title features-title heading">Why choose us</div>
			</div>		
		 <div class="row" id="feat">
		 <?php 
                   $args = array(  
                    'post_type' => 'Chooseus',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'posts_per_page' => 6
                  
     );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
               ?>
			<div class="column col-sm-12  col-md-6 col-lg-3">
				<div class="feature" data-animate-in="up">
	               <div class="feature-image primary-color">
	            	<div class="feature-icon"><span style="font-family:'fontawesome'">&#xf109</span>
				</div>			
			</div>
	        <h5 class="feature-title"><?php the_field('feature_title');?>	</h5>
		<div class="feature-content">
			<p><?php the_field('feature_content');?></p>
		</div>
   </div>
</div>
<?php
      endwhile;
      
            wp_reset_postdata(); 
               
      ?>
  <!-- <div class="column col-sm-12 col-lg-3 col-md-6">
	<div class="feature" data-animate-in="up">
	   <div class="feature-image primary-color">
		 <div class="feature-icon"><span style="font-family:'fontawesome'">&#xf0f4</span></div>			</div>
         	<h5 class="feature-title">Highly Versatile	</h5>
	         <div class="feature-content">
	           	<p>Antreas is a highly versatile and flexible WordPress theme</p>
			</div>
        </div>
</div>
<div class="column col-sm-12 col-lg-3  col-md-6">
  <div class="feature" data-animate-in="up">
	<div class="feature-image primary-color">
		<div class="feature-icon"><span style="font-family:'fontawesome'">&#xf1b3</span></div>			</div>
	<h5 class="feature-title">For Small Businesses	</h5>
	   <div class="feature-content">
	     	<p>Great for small business just starting out. Scales along with you.</p>
	 </div>
  </div>
</div>
<div class="column col-sm-12 col-lg-3  col-md-6">
	<div class="feature"data-animate-in="up">
	<div class="feature-image primary-color">
		<div class="feature-icon"><span style="font-family:'fontawesome'">&#xf066</span></div>			</div>
	<h5 class="feature-title">
		Featured Homepage	</h5>
	<div class="feature-content">
		<p>Unlimited flexibility with our homepage design. Try the best.</p>
			</div>
       </div>
     </div> -->
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
                    'post_type' => 'AboutUs',
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
	               	<a href="https://www.demos.machothemes.com/antreas/our-story/" title="Our Story"><?php the_field('about_title'); ?></a>
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




<!-- 
//tagline section -->
<div id="tagline" class="section tagline dark">
	<div class="layer">
	<div class="container">
		<div class="tagline-body">
			<div class="tagline-title"data-animate-in="fadeIn"><?php the_field('tagline_body');?></div>			
      <div class="tagline-content" data-animate-in="fadeIn"><?php the_field('tagline_content'); ?></div>
      			<a class="tagline-link button button-medium" href="#features">Learn More</a>
          		</div>
		</div>
		</div>
  </div>

<!-- //end -->



<!-- SERVICE FORM SECTION START -->

<div id="services" class="section services">
	<div class="container">
            <div class=" section-heading services-heading">
                <div id="services-subtitle" class="services-subtitle section-subtitle">our services</div>
                   <div class="section-title services-title heading">What we can do for you</div>
           </div>		
            <div class="row">
			<?php 
                   $args = array(  
                    'post_type' => 'Services',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'posts_per_page' => 6
                    );
                $loop = new WP_Query( $args ); 
               while ( $loop->have_posts() ) : $loop->the_post(); 
               ?>
                <div class="sec-service col-lg-4">
                     <div class="service-col">
                       <div class="service"data-animate-in="up">
                            <a href="https://www.demos.machothemes.com/antreas/service/premium-consulting/">
                             <div class="primary-color service-icon">
                               
                               <img src="<?php the_field('service_image');?>" class="primary-color">
                              </div>
                            </a>
                       </div>
                        <div class="service-body">
                            <h4 class="service-title" data-animate-in="up">
                            <a href="https://www.demos.machothemes.com/antreas/service/premium-consulting/"><?php the_field('service_body'); ?></a>
                            </h4>
	
                             <div class="service-content"data-animate-in="fadeIn">
                                <p><?php the_field('service_content'); ?></p>
                            </div>
		        	    </div>
                     </div>
                  </div>
		<?php
            endwhile;
            wp_reset_postdata(); 
         ?>
                
		</div>
           </div>
     </div>
</div>


<!-- SERVICE FORM SECTION END -->


 
 <!-- TESTIMONIALS FORM SECTION START -->
 <div id="testimonials" class="section testimonials">
   	  <div class="container">
		     <div class=" section-heading testimonials-heading">
                    <div id="testimonials-subtitle" class="testimonials-subtitle section-subtitle">our testimonials</div>
                    <div class="section-title testimonials-title heading">What people say about us</div>
             </div>

            
             <div class="row"data-animate-in="up">
			 <?php 
                   $args = array(  
                    'post_type' => 'Testimonials',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'posts_per_page' => 6
                    );
                $loop = new WP_Query( $args ); 
               while ( $loop->have_posts() ) : $loop->the_post(); 
               ?>
                       <div class="testi col-lg-4 ">
                           <div class="testimonial">
                                   <div class="testimonial-content">
                                        <p data-animate-in="fadeIn"> <?php the_field('testimonial_content');?>
                                        </p>
                                    </div>
                                       <img src="<?php the_field('testimonial_image');?>" class="testimonial-image">
                                       <h4 class="testimonial-name"><?php the_field('testimonial_name');?></h4>
                                       <div class="testimonial-position"><?php the_field('testimonial_position');?> </div>
                                 </div>
                             </div>
         <?php
            endwhile;
            wp_reset_postdata(); 
         ?>
                     

		        </div>
             </div>
       </div>
   </div>

<!-- TESTIMONIALS FORM SECTION END -->


<!-- our Team -->
<div id="team" class="section team">
		     <div class="container">
			         <div class=" section-heading team-heading">
                           <div id="team-subtitle" class="team-subtitle section-subtitle">we are dedicated</div>
                           <div class="section-title team-title heading">Meet our team</div>
                     </div>	
         <div class="row">
		 <?php 
                   $args = array(  
                    'post_type' => 'Ourteam',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'posts_per_page' => 6
                    );
                $loop = new WP_Query( $args ); 
               while ( $loop->have_posts() ) : $loop->the_post(); 
               ?>
             <div class="column column-narrow col-sm-12 col-md-6 col-lg-3">
                <div class="team-member" data-animate-in="up">
                	<img  src="<?php  the_field('team_image'); ?>" class="team-member-image wp-post-image"/>
                  	        <div class="team-member-body">
							  <h3 class="team-member-title"><?php the_field('team_member_title'); ?></h3>
		                       <div class="team-member-description"><?php the_field('team_member_description'); ?></div>
	                            	<div class="team-member-content">
	                            		<p><?php the_field('team_member_content');?></p>
	                           	     </div>
										<div class="team-member-links">
												<div class="clear">
												</div>
										</div>	

                        	</div>

                </div>
           </div>
		   <?php
            endwhile;
            wp_reset_postdata(); 
         ?>
                 
</div>	
		
             	
	</div>
 </div>


 <!-- ourteam end -->

 
<!-- CONTACT FORM SECTION START -->

<div id="contact" class="section contact">
	<div class="container">
		<div class=" section-heading contact-heading">
               <div id="contact-subtitle" class="contact-subtitle section-subtitle">get in touch</div>
               <div class="section-title contact-title heading">Contact us</div>
        </div>
	    <div class="row">
       
                   <div class="col-lg-6 contact-details  contact__content" data-animate-in="up">
				           <!-- <h5 class="contact-head">
                      We’re Here To Help!</h5>
                        <p class="contact-ad">Famysys Technologies is designed to help your business safely transit into the digital age.</p>
                        <h5 class="contact-head">Send us a message and we will show you how.</h5>
                        <p class="contact-address"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<strong>Address:</strong>D2, No 32,33, Adhisri Apartments, Kothari Road, Nungambakkam,
                          Chennai – 600034</p>
                        <p class="contact-address"><i class="fa fa-phone"></i>&nbsp;&nbsp;<strong>Telephone:</strong> (+91) 908-739-4980</p>
                        <p class="contact-address"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong>Email:</strong> <a href="mailto:contact@gmail.com">famysys.com</a></p> -->
                        <?php dynamic_sidebar('custom address'); ?>
                      </div>  
           
                    <div class="col-lg-6 con-form  contact__form"data-animate-in="up">
                    
                    <?php echo do_shortcode('[contact-form-7 id="240" title="contactform"]'); ?>
                        </div>
              </div>

       
 </div>
</div>
<!-- CONTACT FORM SECTION END -->


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

<!-- BLOG SECTION END -->


<?php
get_footer();
?>