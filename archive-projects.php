<?php
/**
 * The template for displaying all pages.
 *
 * @package hewy_Theme
 */

get_header(); ?>
<!-- Calling Header -->

<!-- START OF PAGE CONTENT -->
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- PHP Conditional Start for have_posts() -->
		<?php if (have_posts()): ?>
		<!-- Page Header Calling Entry Title -->
		<section class="project-header">
			<h1>My Projects</h1>
		</section>
		<!-- End of Page Header -->
		<!-- Start of Project Grid -->
		<div class="project-grid">
			<?php $posts_array = get_posts(
				array(
					'posts_per_page' => 6,
					'post_type' => 'projects',
					'post_status' => 'publish',
				));
			foreach ($posts_array as $post) { ?>
			<!-- Start of WordPress Loop -->
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
					<div class="project-grid-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%,rgba(0, 0, 0, 0.4) 100%), #969696 url('<?php echo $thumb['0'];?>'); background-size: cover; background-position: center;">
						<a href="<?php echo get_the_permalink(); ?>">
					<!-- PHP Conditional checking and pulling Post Thumbnail -->
					<!-- End of PHP Conditional -->

						<!-- Start of Project Info calling Title wrapped in anchor and a button with link to post -->
						<div class="project-info">
							<?php the_title(sprintf('<h3 class="project-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');?>
                    		<?php echo '<a href="'.get_the_permalink().'">View Site</a>'; ?>
                		</div>
                		<!-- ENd of Project Info -->
					<!-- End of Grid Wrapper -->
					</div>
				<!-- End of Grid Item -->
        	<?php } ?>
        	</a>
        	<?php else: ?>
        	<?php endif;?>
        	<!-- End of Loop & Conditional -->
    	</div>
    	<!-- End of Project Grid -->
	</main>
	<!-- End of Main -->
</div>
<!-- End of Primary -->
<?php get_footer(); ?>
<!-- Calling Footer --> 
