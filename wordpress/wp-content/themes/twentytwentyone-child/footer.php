<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!-- footer-section start -->

  <div id="subfooter" class="subfooter">
      <div class="container">
          <div class="row">
            <div class="column col-lg-4">
               <div class="subfooter-column">
                   <div class="text-col-1" id="t-title">
                        <!-- <div class="text-col">
                         About us
                        </div>
                        <div class="textwidget">
							<p class="paragraph"> Etiam rutrum mattis metus vitae dapibus. <strong>Cras sagitti</strong>s leo tellus, non rhoncus velit <em>efficitur</em> tristique.</p>
                            <h5 class="contact-info">Contact Info</h5>
                            <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<strong>Adress:</strong> 75 Ninth Avenue New York, NY 10011</p>
                            <p><i class="fa fa-phone"></i>&nbsp;&nbsp;<strong>Telephone:</strong> +1 212-565-0000</p>
                            <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong>Email:</strong> <a href="mailto:contact@gmail.com">contact@gmail.com</a></p>
                        </div> -->
						<?php dynamic_sidebar( 'custom footer address' ); ?>
                   </div>
               </div>


            </div>
            <div class="column col-lg-5">
               <div class="subfooter-column">
                   <div class="text-col-1" id="t-title">
                     <div class="text-col2">Antreas is social</div> 
                     <div id="social">
                        <a class="facebookBtn smGlobalBtn" href="#" ></a>
                        <a class="twitterBtn smGlobalBtn" href="#" ></a>
                        <a class="googleplusBtn smGlobalBtn" href="#" ></a>
                        <a class="linkedinBtn smGlobalBtn" href="#" ></a>
                        <a class="pinterestBtn smGlobalBtn" href="#" ></a>
                     
                        <a class="tumblrBtn smGlobalBtn" href="#" ></a>
                        <a class="rssBtn smGlobalBtn" href="#" ></a>
                     </div>
                     <div class="text-col2">Search</div> 
                     <div class="search-box">
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s">
					<input type="submit" id="searchsubmit" value="Search">
				     </div>
                 </div>
              </div>
            </div>
            <div class="column col-lg-3">
            <div class="subfooter-column col">
                   <div class="text-col-1" id="t-title">
                     <div class="text-col">Recent posts</div> 
                        <div class="img-post-div">
                            <div class="div1">
                            <img src="<?php bloginfo('template_url');?>/assets/images/img.jpg" class="air">
                            <p class="texte">
                            <a href="#" class="img-head">Travel Tips for South Africa</a><br>
                            <span class="texts">   October 12, 2018</span>
                            <p>
                            </div>
                            <div class="div1">
                            <img src="<?php bloginfo('template_url');?>/assets/images/img1.jpg" class="air">
                            <p class="texte">
                            <a href="#" class="img-head">Travel Tips for South Africa</a><br>
                            <span class="texts">   October 12, 2018</span>
                            <p>
                           </div>
                            <div class="div1">
                            <img src="<?php bloginfo('template_url');?>/assets/images//img2.jpg" class="air">
                            <p class="texte" >
                            <a href="#" class="img-head">Travel Tips for South Africa</a><br>
                            <span class="texts">   October 12, 2018</span>
                            <p>
  
                           </div>
                        </div>
                    
                   </div>
             </div>

            </div>
        </div>
      </div>

  </div>

  <div class="clear"></div>

  <script src="<?php bloginfo('template_url');?>/assets/js/h-script.js" ></script>
<?php wp_footer(); ?>


</body>
</html>