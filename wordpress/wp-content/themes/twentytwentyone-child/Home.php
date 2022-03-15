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
			<div class="column col-sm-12  col-md-6 col-lg-3">
				<div class="feature" data-animate-in="up">
	               <div class="feature-image primary-color">
	            	<div class="feature-icon"><span style="font-family:'fontawesome'">&#xf109</span>
				</div>			
			</div>
	        <h5 class="feature-title"> Responsive Design	</h5>
		<div class="feature-content">
			<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am.</p>
		</div>
   </div>
</div>
  <div class="column col-sm-12 col-lg-3 col-md-6">
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
     </div>
   </div>	
 </div>
</div>













<?php
get_footer();
?>