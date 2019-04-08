<?php
/**
 * The template for displaying About page.
 *
 * @package hewy_Theme
 */

get_header(); ?>
<!-- Calling Header --> 
	<!-- Start of Page Content --> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Start of WordPress Loop --> 
			<?php while ( have_posts() ) : the_post(); ?>
				<!-- Start of Post Article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- Start of Entry Header --> 
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header>
					<!-- End of Entry Header -->

					<!-- Start of Entry Content -->
					<div class="entry-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
								'after'  => '</div>',
							) );
						?>
					</div>
					<!-- End of Entry Content -->

					<!-- Start of Follow Me / Social Icon Area -->
					<div class="follow-me">
						<h2>Follow Me</h2>
						<div class="social-icons">
							<a href="https://www.linkedin.com/in/oliver-heward">
								<i class="fab fa-linkedin-in"></i> </a>
							<a href="https://github.com/OliverHeward">
								<i class="fab fa-github"></i> </a>
							<a href="https://twitter.com/HewardOliver">
								<i class="fab fa-twitter"></i></a>
							<a href="https://www.instagram.com/hewy.dev">
								<i class="fab fa-instagram"></i></a>
							<a href="">
								<i class="fab fa-spotify"></i> </a>
						</div>
					</div>
					<!-- End of Follow Me / Social Icon Area -->
				</article>
				<!-- End of Post Article -->

			<?php endwhile; // End of the loop. ?>

		</main>
		<!-- End of Main -->
	</div>
	<!-- End of Primary -->
<?php get_footer(); ?>
<!-- Calling Footer --> 
