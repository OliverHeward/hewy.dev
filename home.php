<?php
/**
 * The template for displaying Blog Archive Page.
 *
 * @package hewy_Theme
 */

get_header(); ?>
<!-- Calling Header -->

	<!-- Start of Hero Section --> 
	<!-- Too be changed -- RESEARCH HOW TO MAKE A DYNAMIC CAROUSEL PULLING DATA FROM WORDPRESS DATABASE TO DISPLAY LATEST BLOG POSTS AS CAROUSEL -->

		<?php $args = array (
			'posts_per_page' => 1,
			'post_type' => 'post',
			'post_status' => 'publish',
		);

		/* Start of WordPress Loop */
		$posts_array = get_posts($args);
		foreach ($posts_array as $post) { ?>
			<!-- Start of Hero Wrapper -->
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<section class="hero" style="background-image: url('<?php echo $thumb['0'];?>'); background-size: cover; background-position: center;">
				<!-- Start of Hero Info --> 
					<h5 class="most-recent">Recent Blog Post</h5>
					<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
					<?php echo '<a class="white-btn" href="'.get_the_permalink().'">View Post</a>'; ?>
				<!-- End of Hero Info -->	
		<?php } ?>
		<!-- End of Loop -->
	</section>
	<!-- End of Hero Section --> 

	<!-- Start of Page Content --> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Start of post Section -->
			<section class="posts">
			<!-- Start of WordPress Loop -->
			<?php while ( have_posts() ) : the_post(); ?>
				<!-- Start of Post --> 
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- Start of Entry Header, Pulling Title, Posted On and Posted By -->
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php hewy_posted_on();?>  / <?php hewy_posted_by();?>
					</header>
					<!-- End of Entry Header --> 

					<!-- Start of Entry Image with PHP Conditional checking if Post has Thumbnail --> 
					<div class="entry-image">
						<?php if (has_post_thumbnail()): ?>
							<?php the_post_thumbnail('large');?>
						<?php endif; ?>
						<!-- End of PHP Conditional -->
					</div>
					<!-- End of Entry Image --> 

					<!-- Start of Entry Content, Pulling the 'Excerpt' of the Post -->
					<div class="entry-content">
						<?php the_excerpt();?>
					</div>
					<!-- End of Entry Content -->
					<!-- Button with Permalink too Post -->
					<div class="button">
               			<?php echo '<a class="black-btn" href="'.get_the_permalink().'">READ MORE →</a>'; ?>
					</div>
					<!-- End of Button --> 
					
				</article>
				<!-- End of Post -->

			<?php endwhile; // End of the loop. ?>
			</section>
			<!-- End of Post Section -->

			<!-- Start of Sidebar Container -->
			<div class="sidebar">
				<!-- Calling WordPress Sidebar -->
			<?php get_sidebar(); ?>

			<h2 class="archive-title">Archive</h2>
			<div class="archive-dropdown">
					<button class="archive-btn">Select Month <i class="fas fa-chevron-down"></i></button>
					<ul class="archive-content">
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</div>
			</div>
			<!-- End of Sidebar -->
		</main>
		<!-- End of Main --> 
	</div>
	<!-- End of Primary -->

<?php get_footer(); ?>
<!-- Calling Footer --> 
