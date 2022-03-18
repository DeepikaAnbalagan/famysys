<?php
/**
* Template Name:Contact
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
           <h1 class="pagetitle-title heading">Contact-us</h1>
           <div id="breadcrumb" class="breadcrumb"><a class="breadcrumb-link" href="index.php">Home</a><span class="breadcrumb-separator"></span><span class="breadcrumb-title">Contact-us</span>
           </div>
           </div>
    </div>
</div>

<!-- CONTACT FORM SECTION START -->

<div id="contact" class="section contact">
	<div class="container">
		<!-- <div class=" section-heading contact-heading">
               <div id="contact-subtitle" class="contact-subtitle section-subtitle">get in touch</div>
               <div class="section-title contact-title heading">Contact us</div>
        </div> -->
        <div class="row">
        <div class=" offset-lg-1 col-lg-9  col-lg-offset-right-2">
        <div class="c-page-content">
           <p>The theme integrates with Contact Form 7 and WPForms plugins so you can easily add contact forms in any of your pages.</p>
           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
        </div>
        </div>
        </div>
      
	    <div class="row">
       
           <div class=" offset-lg-1 col-lg-10  contact-form-sec">
                   <!-- <div class="contact-details col2 contact__content" data-animate-in="up">
				     <h5 class="contact-head">We don't byte</h5>
                        <p>Proin quis nisl et mauris dictum fringilla. Aliquam erat volutpat. Integer consequat sagittis tellus a dapibus. Donec porta libero vel sapien rutrum, vitae efficitur risus
                             vestibulum. Maecenas arcu ante, suscipit in fermentum sit amet, pretium eu turpis. Pellentesque iaculis cursus ipsum eget rutrum. Nullam blandit laoreet dui, sed dictum nisl consequat a. Quisque sagittis libero lorem, posuere commodo sem molestie sed. Donec ullamcorper feugiat finibus.</p>
                        <h5 class="contact-head">Contact Info</h5>
                        <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<strong>Adress:</strong> 75 Ninth Avenue New York, NY 10011</p>
                        <p><i class="fa fa-phone"></i>&nbsp;&nbsp;<strong>Telephone:</strong> +1 212-565-0000</p>
                        <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong>Email:</strong> <a href="mailto:contact@gmail.com">contact@gmail.com</a></p>
                     </div>   -->
           
                    <div class="col-lg-12 con-form  contact__form"data-animate-in="up">
                    <?php echo do_shortcode('[contact-form-7 id="240" title="contactform"]'); ?>
           
                        </div>
              </div>

         </div>
 </div>
</div>














<?php
get_footer();
?>