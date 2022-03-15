<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500&family=Dancing+Script&family=Dosis:wght@200&family=IBM+Plex+Serif:wght@100&family=Josefin+Sans:ital@1&family=Lato&family=Libre+Baskerville&family=Open+Sans+Condensed:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- social media cdn  -->
    <!-- <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
	<link href="<?php bloginfo('template_url');?>/assets/css/style.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar navbar-expand-sm bg-light1">
  <div class="container">
    <div class="nav-top">
<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>

  </div>
<div class="navs">
<ul class="navbar-nav">
    <li class="nav-item active">
     <span> <a class="nav-link" href="#"><i class="fa fa-facebook-f"  style="font-size:16px;color: black;"></i></a>  </span>
    </li>
    <li class="nav-item">
    <span>  <a class="nav-link" href="#"><i class="fa fa-twitter" style="font-size:16px;color: black;"></i></a>  </span>
    </li>
    <li class="nav-item">
    <span>  <a class="nav-link" href="#"><i class="fa fa-linkedin-square" style="font-size:16px;color: black;"></i></a>  </span>
    </li>
    <li class="nav-item">
    <span>  <a class="nav-link" href="#"><i class="fa fa-instagram" style="font-size:16px;color: black;"></i></a>  </span>
    </li>
</ul>
</div>

  
</nav>
        <!-- End top header-->


        <div class="navigation-wrap bg-light start-header start-style sticky-top">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
						<a class="navbar-brand" href="https://front.codes/" target="_blank">
            <img class="logo-img" itemprop="logo" src="https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/11/antreas-logo.png" width="90" height="43" alt="Antreas">
            </a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
								<li class="nav-item">
									<a class="nav-link " href="#features">Features</a>
							
								</li>
                	<li class="nav-item">
									<a class="nav-link" href="#about">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Portfolio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#services">Service</a>
								</li>
		
								<li class="nav-item">
									<a class="nav-link" href="#testimonials">Testimonial</a>
								</li>
								<!-- <li class="nav-item ">
									<a class="nav-link" href="#">Clients</a>
								</li> -->
                <li class="nav-item">
									<a class="nav-link" href="#team">Team</a>
								</li>
                <li class="nav-item">
									<a class="nav-link" href="#contact">Contact</a>
								</li>
							</ul>
						</div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>