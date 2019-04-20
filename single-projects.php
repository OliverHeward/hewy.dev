<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-meta">
					
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php hewy_posted_on(); ?> / <?php hewy_posted_by(); ?>
			</header><!-- .entry-meta -->
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				<div class="entry-header" style="background: url('<?php echo $thumb['0'];?>'); background-size: cover; background-position: center;">


				</div><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

				<!-- Site Link -->
				<div class="site-link">
					<a href="https://aloha.hewy.dev">View site</a>
				</div>
				<!-- End of Site Link -->

			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
