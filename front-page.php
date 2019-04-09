<?php
/**
 * The Front Page template file.
 *
 * @package hewy_Theme
 */

get_header(); ?>
<!-- Calling Header --> 
	<!-- Start of Page Content -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<!-- Start of PHP Conditional checking If Have Posts & is Home OR Front Page -->
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<!-- Start of Screen Reader -->
				<header>
					<h1 class="page-title screen-reader-text">
						<?php single_post_title();?>
					</h1>
				</header>
				<!-- End of Screen Reader -->
			<?php endif; ?>
			<!-- End of Conditional --> 

			<!-- Start of Hero Section -->
			<section class="hero">
				<!-- Profile Container -->
				<div class="me">
				</div>
				<h1 class="entry-title">Hi, my name is Oliver. I am a Web Developer and blogger.</h1>
				<a class="black-btn" href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">More about me</a>
			</section>
			<!-- End of Hero Section -->

			<!-- Start of Blog Section --> 
			<section class="blog-home container">
				<h1 class="title-header">Latest Blogs</h1>
				<!-- Creating PHP Object to Grab 5 post types that are published -->
				<?php
					$args = array(
						'posts_per_page' => 5,
						'post_type' => 'post',
						'post_status' => 'publish',
					);

					/* Start of WordPress Loop */
					$posts_array = get_posts($args);
					foreach ($posts_array as $post) { ?>
					<!-- Start of Blog Wrapper -->
					<div class="blog-wrapper">
						<!-- Start of Blog Date --> 
						<div class="blog-date">
							<span class="blog-day">
								<?php echo date("j"); ?>
 							</span> <!-- End of Day -->
 							<span class="blog-month">
 								<?php echo date("M"); ?>
							</span> <!-- End of Month -->
						</div>
						<!-- End of Blog Date -->
						<!-- Start of Blog Info -->
						<div class="blog-info">
							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						</div>
						<!-- End of Blog Info --> 
					</div>
					<!-- End of Blog Wrapper --> 
					<?php }?>
					<!-- End of WordPress Loop --> 
				<!-- Echo Button --> 
				<?php echo '<a class="black-btn" href="'. get_permalink( get_page_by_path( 'blog' ) ) . '">View More</a>'; ?>
			</section>
			<!-- End of Blog Section -->
			<section class="experience">
				<h1 class="entry-title">Experience</h1>
				<div class="experience-grid">
					<div class="container-skillbar">
						<div class="skillbar clearfix " data-percent="90%">
							<div class="skillbar-title"><span style="color: #DD1E2F;">HTML5</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">90%</div>
						</div> <!-- End Skill Bar -->

						<div class="skillbar clearfix " data-percent="90%">
							<div class="skillbar-title"><span style="color: #EBB035;">CSS3</span></div>
							<div class="skillbar-bar" style="background: #EBB035;"></div>
							<div class="skill-bar-percent">90%</div>
						</div> <!-- End Skill Bar -->

						<div class="skillbar clearfix " data-percent="65%">
							<div class="skillbar-title"><span style="color: #f7df1e;">JS</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">65%</div>
						</div> <!-- End Skill Bar -->

						<div class="skillbar clearfix " data-percent="80%">
							<div class="skillbar-title"><span style="color: #4f5b93;">PHP</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">80%</div>
						</div> <!-- End Skill Bar -->
					</div>
					<div class="container-skillbar">
						<div class="skillbar clearfix " data-percent="45%">
							<div class="skillbar-title"><span style="color: #61dbfb;">ReactJS</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">45%</div>
						</div> <!-- End Skill Bar -->

						<div class="skillbar clearfix " data-percent="90%">
							<div class="skillbar-title"><span style="color: #cd6799;">SASS</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">90%</div>
						</div> <!-- End Skill Bar -->

						<div class="skillbar clearfix " data-percent="75%">
							<div class="skillbar-title"><span style="color: #FAA523;">jQuery</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">75%</div>
						</div> <!-- End Skill Bar -->

						<div class="skillbar clearfix " data-percent="75%">
							<div class="skillbar-title"><span style="color: #00749c;">WP</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">75%</div>
						</div> <!-- End Skill Bar -->
					</div><!-- End container Skill Bar -->
				</div>
  			 
			<!-- Start of Project Section -->
			<section class="project-grid container">
				<h1 class="entry-title">Projects</h1>

				<!-- Start of Project block -->
				<ul class="project-ul">
					<!-- Creating PHP Object to grab 6 Published Project post types -->
					<?php 
						$posts_array = get_posts( array(
							'posts_per_page' => 6,
							'post_type' => 'projects',
							'post_status' => 'publish',
						)
					);
					foreach($posts_array as $post) {?>
						<!-- Start of List Items -->
						<li>

							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<!-- Start of Project Wrapper w/ PHP Conditional for IF Post has Thumbnail -->
							<div class="project-wrapper" style="background-image: url('<?php echo $thumb['0'];?>'); background-size: cover; background-position: center;">
								<h1 class="project-title"><?php echo the_title();?></h1>
							</div>
							<!-- End of Project Wrapper & Conditional -->
						</li>
						<!-- End of List Items -->
					<?php }?>
					<?php else: ?>
					<?php endif;?>
					<!-- End of Loop & Conditionals -->
				</ul>
				<!-- End of Project UL -->

				<!-- Echo Button Black --> 
				<?php echo '<a class="black-btn" href="'.get_post_type_archive_link('projects').'">View Projects</a>'; ?>

			</section>
			<!-- End of Project Grid -->

		</main>
		<!-- End of Main -->
	</div>
	<!-- End of Primary -->
<?php get_footer(); ?>
<!-- Calling Footer -->
