<?php
/**
 * The header for our theme.
 *
 * @package Bloomsbury_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php echo esc_html( 'Skip to content' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">


				<!-- Hamburger menu and navigation bar -->
				<div class="collapse-menu">
					<div id="menuToggle">

						<input type="checkbox" />

						<span></span>
						<span></span>
						<span class="hamburger-reverse"></span>

							<ul id="menu">
								<div class="slidebar-menu">
									<li class="menu-nav-item">
									<i class="fas fa-home"></i>
									<a href="<?php echo get_permalink( get_page_by_path( 'front-page' ) );?>">
										<div class="menu-nav-text">
											Home
										</div>
									</a>
								</li>
								<li class="menu-nav-item">
									<i class="fas fa-book-open"></i>
									<a href="<?php echo get_permalink( get_page_by_path( 'about' ) );?>">
										<div class="menu-nav-text">
											About
										</div>
									</a>
								</li>

								<li class="menu-nav-item">
									<i class="fas fa-blog"></i>
									<a href="<?php echo get_permalink( get_page_by_path( 'blog' ) );?>">
										<div class="menu-nav-text">
											Blog
										</div>
									</a>
								</li>

								<!-- CUSTOM POST TYPES MAY NEED TO CHANGE -->
								<li class="menu-nav-item">
									<i class="fas fa-graduation-cap"></i>
									 <a href="<?php echo get_post_type_archive_link( 'projects' ); ?>">
										<div class="menu-nav-text">
											Projects
										</div>
									</a>
								</li>

								<li>
									<i class="fas fa-phone-volume"></i>
									<a href="<?php echo get_permalink( get_page_by_path( 'contact' ) );?>">
										<div class="menu-nav-text">
											Contact Me
										</div>
									</a>
								</li>
							</div>
						</ul>
					</div>
				</div>

				<div class="logo">
					Hewy.dev
				</div>

					<div class="header-social">
						<a href="https://www.linkedin.com/in/oliver-heward">
							<i class="fab fa-linkedin-in"></i> </a>
						<a href="https://github.com/OliverHeward">
							<i class="fab fa-github"></i></a>
					</div>
				</div> <!-- End of container -->
			</header><!-- End of Site-Header -->

			<div id="content" class="site-content">
