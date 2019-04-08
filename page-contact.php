<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<div class="form-container">
			<form id="contact" action="<?php echo get_template_directory_uri() . '/form/form_process.php'?>" method="post">

				<h3>Drop Me A Message!</h3>
				<div class="input-top-container">
					<fieldset>
						<input placeholder ="Name" type="text" tabindex="1"  name="name" value="<?php $name?>" required autofocus>
						<span class="error"><?php echo $name_error ?></span>
					</fieldset>

					<fieldset>
						<input placeholder="Email" type="text" tabindex="2" name="email" value="<?php $email?>" required>
						<span class="error"><?php echo $email_error ?></span>
					</fieldset>
				</div>

				<fieldset>
					<textarea placeholder="Type your message here..." tabindex="8" name="message" value="<?php $name?>" type="text" required></textarea>
				</fieldset>

				<fieldset>
					<button class="black-btn" id="submit-form" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
					<span class="success"><?php echo $success; ?></span>
				</fieldset>
			</form>
		</div>

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

	</article><!-- #post-## -->

<?php get_footer(); ?>
