<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Palace
 */
	// Get the reading setting option
	$show_on_front = get_option( 'show_on_front' );

	// Check if "latest posts" is selected in reading setting
	if ( 'posts' == $show_on_front ) {
		// Load home.php
		get_template_part( 'home' );
	} else {
		// Load front page with additional sections
		get_header();
		$options        = foodland_get_theme_options(); // get theme options
		$defaults		= foodland_get_default_theme_options(); // get default theme options

		$disable_blog  	= $options['disable_blog_options'];
		$homepage_title = $options['front_page_title'];
		$categories     = $options['front_page_category'];
		$no_of_posts    = $options['front_page_no_of_posts'];

		if( !$disable_blog ){ // Check if blog section is not disabled
	?>
		<div id="latest-news" class="page-section">
		    <div class="wrapper">
				<?php if( !empty($homepage_title ) ){ ?>
					<h2 class="upercase"><?php echo esc_html( $homepage_title ); ?></h2>
				<?php } ?>
				<main id="main" class="site-main" role="main">
					<?php 
					$query = new WP_Query( array( 
												'category__in'   => $categories , 
												'posts_per_page' => $no_of_posts,
												) );
					
						if ( $query -> have_posts() ) : ?>

							<?php /* Start the Loop */ ?>
							<?php while ( $query -> have_posts() ) : $query -> the_post(); ?>

								<?php
									/* Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );
								?>

							<?php endwhile;
							wp_reset_query(); ?>

						<?php else : ?>

							<?php get_template_part( 'no-results', 'index' ); ?>

						<?php endif; ?>
				</main><!-- #main -->		
			</div><!-- .wrapper -->
		</div><!-- #latest-news -->

	<?php
		}
		get_footer();
	}